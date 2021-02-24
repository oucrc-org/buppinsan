import React from 'react';
import {Link} from 'react-router-dom';

function Aside() {
    const asideStyle = {
        top: '90px',
        width: '350px'
    };
    return (
        <aside className='bg-white bottom-0 fixed h-full left-0 shadow-md' style={asideStyle}>
            <Link to='/'>一覧を表示</Link>
            <p>タグ</p>

            <p>その他</p>
            <Link to='/tag'>タグ管理</Link>
            <Link to='/user'>ユーザ管理</Link>
        </aside>
    );
}

export default Aside;
