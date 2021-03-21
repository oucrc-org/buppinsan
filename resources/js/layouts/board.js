import React, {useState, useEffect} from 'react';
import axios from 'axios';

function Board() {
    const [data, setData] = useState({boards: []});

    useEffect(() => {
        const fetchData = async () => {
            const result = await axios.get(
                '/api/getBoards'
            );
            setData(result.data);
        };
        fetchData();
    }, []);

    return (
        <div>
            {data.boards.map(item => (
                <div className={'mb-8'} key={item.id}>
                    <img src={item.photo_path} alt={item.name}/>
                    <h1 className={'text-xl'}>タイトル: {item.name}</h1>
                    <p>
                        <span>タグ: </span>
                        {item.tags.map(tag => (
                            <span className={'mr-2'} key={tag.id}>{tag.name}</span>
                        ))}
                    </p>
                    <p>私物かどうか: {item.belong ? '私物' : '備品'}</p>
                </div>
            ))}
        </div>
    );
}

export default Board;
