import React, {useState, useEffect} from 'react';
import axios from 'axios';


function BoardDetail(props) {
    const [data, setData] = useState({board: {tags: []}});

    useEffect(() => {
        const fetchData = async () => {
            const result = await axios.get(
                '/api/getBoardDetail/' + props.match.params.board_id
            );
            setData(result.data);
        };
        fetchData();
    }, []);

    return (
        <div>
            <img src={data.board.photo_path} alt={data.board.name}/>
            <h1 className={'text-xl'}>タイトル: {data.board.name}</h1>
            <p>
                <span>タグ: </span>
                {data.board.tags.map(tag => (
                    <span className={'mr-2'} key={tag.id}>{tag.name}</span>
                ))}
            </p>
            <p>私物かどうか: {data.board.belong ? '私物' : '備品'}</p>
            <p>テプラ番号: {data.board.label_number}</p>
            <p>詳細: {data.board.detail}</p>
        </div>
    );
}

export default BoardDetail;
