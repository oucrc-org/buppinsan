import {Link} from 'react-router-dom';

function Aside() {
    return (
        <aside className='aside'>
            <Link to='/'>一覧を表示</Link>
            <p className="bg-primary my-3">タグ</p>

            <p className="bg-primary my-3">その他</p>
            <Link to='/tag'>タグ管理</Link>
            <br/>
            <Link to='/user'>ユーザ管理</Link>
        </aside>
    );
}

export default Aside;
