import {useEffect, useState} from "react/cjs/react.production.min";

function Tag() {
    const [data, setData] = useState(0);

    useEffect(() => {
        const fetchData = async () => {
            const result = await axios(
                'http://127.0.0.1:8000/api/getAllTags',
            );

            setData(result.data);
        };

        fetchData();
    }, []);

    return (
        <div>
            <p>やっぴ</p>
            {data.map(item => (
                <li key={item.id}>
                    <a href={item.id}>{item.name}</a>
                </li>
            ))}
        </div>
    );
}

export default Tag;
