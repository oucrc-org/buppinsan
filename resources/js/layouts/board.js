import React, {useState, useEffect} from 'react';
import axios from 'axios';

function Board() {
    const [data, setData] = useState({boards: []});

    useEffect(() => {
        const fetchData = async () => {
            const result = await axios.get(
                '/api/getAllBoards'
            );
            setData(result.data);
        };
        fetchData();
    }, []);

    return (
        <div>
            <ul>
                {data.boards.map(item => (
                    <li key={item.id}>{item.name}</li>
                ))}
            </ul>
        </div>
    );
}

export default Board;
