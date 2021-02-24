import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter, Switch, Route} from 'react-router-dom';

import Header from "./components/Header";
import Aside from "./components/Aside";
import Buppin from "./layouts/buppin";
import Tag from "./layouts/tag";
import User from "./layouts/user";
import './../css/app.css';

function Index() {
    return (
        <BrowserRouter>
            <Header/>
            <Aside/>
            <main className="main">
                <Switch>
                    <Route path="/" exact>
                        <h1>Hello!!!</h1>
                    </Route>
                    <Route path="/buppin" exact>
                        <Buppin/>
                    </Route>
                    <Route path="/tag">
                        <Tag/>
                    </Route>
                    <Route exact path="/user">
                        <User/>
                    </Route>
                </Switch>
            </main>
        </BrowserRouter>
    );
}

ReactDOM.render(<Index/>, document.getElementById('root'));
