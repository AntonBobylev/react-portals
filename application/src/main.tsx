import React from 'react';
import ReactDOM from 'react-dom/client';

import {
    createBrowserRouter,
    RouterProvider
} from 'react-router-dom';

import './index.css';

import PatientPortal from './references/patient_portal/PatientPortal.tsx';
import Root from './routes/root.tsx';
import ErrorPage from './error-page';

const router = createBrowserRouter([{
    path: '/',
    element: <Root/>,
    errorElement: <ErrorPage/>,
    children: [{
        path: 'patient_portal',
        element: <PatientPortal/>
    }]
}]);

ReactDOM.createRoot(document.getElementById('root')!).render(
    <React.StrictMode>
        <RouterProvider router={router}/>
    </React.StrictMode>,
)
