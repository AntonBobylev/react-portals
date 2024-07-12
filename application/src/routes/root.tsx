import {Link, Outlet} from "react-router-dom";
import './root.css';

export default function Root() {
    return (
        <div id="sidebar">
            <nav>
                <ul>
                    <li>
                        <Link to='/'>Home</Link>
                    </li>
                    <li>
                        <Link to='/patient_portal'>Patient portal</Link>
                    </li>
                </ul>
            </nav>
            <div id="detail">
                <Outlet/>
            </div>
        </div>
    );
}
