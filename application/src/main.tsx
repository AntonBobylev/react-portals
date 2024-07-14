import React from 'react';
import ReactDOM from 'react-dom/client';

import { createBrowserRouter, RouterProvider} from 'react-router-dom';

import { ThemeProvider, createTheme } from '@mui/material/styles';

import PatientPortal from './references/patient_portal/PatientPortal.tsx';
import Root from './routes/root.tsx';
import ErrorPage from './error-page';

import './index.css';
import Patients from './references/patients/Patients.tsx';

const router = createBrowserRouter([{
    path: '/',
    element: <Root/>,
    errorElement: <ErrorPage/>,
    children: [{
        path: 'patient_portal',
        element: <PatientPortal/>
    }, {
        path: 'patients',
        element: <Patients/>
    }]
}]);

const darkTheme = createTheme({
    palette: {
        mode: 'dark'
    }
});

ReactDOM.createRoot(document.getElementById('root')!).render(
    <React.StrictMode>
        <ThemeProvider theme={darkTheme}>
            <RouterProvider router={router}/>
        </ThemeProvider>
    </React.StrictMode>
);
