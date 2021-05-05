import React from "react";
import ReactDOM from 'react-dom';

import Header from "./components/Header";
import Aside from "./components/Aside";
import clsx from "clsx";
import {makeStyles, useTheme} from "@material-ui/core/styles";
import {CssBaseline, Typography} from "@material-ui/core";
import {BrowserRouter, Route, Switch} from "react-router-dom";
import Board from "./layouts/board";
import Tag from "./layouts/tag";
import User from "./layouts/user";
import BoardDetail from "./layouts/boardDetail";

const drawerWidth = 240;

const useStyles = makeStyles((theme) => ({
    root: {
        display: 'flex',
    },
    appBar: {
        transition: theme.transitions.create(['margin', 'width'], {
            easing: theme.transitions.easing.sharp,
            duration: theme.transitions.duration.leavingScreen,
        }),
    },
    appBarShift: {
        width: `calc(100% - ${drawerWidth}px)`,
        marginLeft: drawerWidth,
        transition: theme.transitions.create(['margin', 'width'], {
            easing: theme.transitions.easing.easeOut,
            duration: theme.transitions.duration.enteringScreen,
        }),
    },
    menuButton: {
        marginRight: theme.spacing(2),
    },
    hide: {
        display: 'none',
    },
    drawer: {
        width: drawerWidth,
        flexShrink: 0,
    },
    drawerPaper: {
        width: drawerWidth,
    },
    drawerHeader: {
        display: 'flex',
        alignItems: 'center',
        padding: theme.spacing(0, 1),
        // necessary for content to be below app bar
        ...theme.mixins.toolbar,
        justifyContent: 'flex-end',
    },
    content: {
        flexGrow: 1,
        padding: theme.spacing(3),
        transition: theme.transitions.create('margin', {
            easing: theme.transitions.easing.sharp,
            duration: theme.transitions.duration.leavingScreen,
        }),
        marginLeft: -drawerWidth,
    },
    contentShift: {
        transition: theme.transitions.create('margin', {
            easing: theme.transitions.easing.easeOut,
            duration: theme.transitions.duration.enteringScreen,
        }),
        marginLeft: 0,
    },
}));

function Index() {
    const classes = useStyles();
    const theme = useTheme();
    const [open, setOpen] = React.useState(false);

    const handleDrawerOpen = () => {
        setOpen(true);
    };

    const handleDrawerClose = () => {
        setOpen(false);
    };

    return (
        <BrowserRouter className={classes.root}>
            <CssBaseline/>
            <Header classes={classes} open={open} handleDrawerOpen={handleDrawerOpen}/>
            <Aside classes={classes} theme={theme} open={open} handleDrawerClose={handleDrawerClose}/>
            <main>
                <div className={classes.drawerHeader} />
                <Switch>
                    <Route path="/" exact>
                        <h1>Hello!!!</h1>
                    </Route>
                    <Route path="/board" exact>
                        <Board/>
                    </Route>
                    <Route path="/board/:board_id" component={BoardDetail} exact/>
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
