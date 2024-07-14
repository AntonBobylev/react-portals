import {Link, Outlet} from "react-router-dom";
import './root.css';

export default function Root() {
    return (
        <>
            <div id="sidebar">
                <nav>
                    <Link to='/'>Home</Link>&nbsp;|&nbsp;
                    <Link to='/patients'>Patients</Link>&nbsp;|&nbsp;
                    <Link to='/patient_portal'>Patient portal</Link>
                </nav>
            </div>
            <div id="detail">
                <Outlet />
            </div>
        </>
    );
}
