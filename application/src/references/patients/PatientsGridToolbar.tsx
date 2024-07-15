import {IconButton, Toolbar} from '@mui/material';
import AddIcon from '@mui/icons-material/Add';
import EditIcon from '@mui/icons-material/Edit';
import RemoveCircleOutlineIcon from '@mui/icons-material/RemoveCircleOutline';
import RefreshIcon from '@mui/icons-material/Refresh';

import './PatientsGridToolbar.css';

export default function PatientsGridToolbar({
    onRefresh,
    refreshDisabled,
    onAdd,
    addDisabled,
    onEdit,
    editDisabled,
    onRemove,
    removeDisabled
})
{
    return (
        <Toolbar>
            <IconButton
                className='toolbar-button'
                disabled={refreshDisabled}
                size='small'
                edge='start'
                color='inherit'
                aria-label='open drawer'
                sx={{ mr: 2 }}
                onClick={onRefresh}
            >
                <RefreshIcon />
            </IconButton>

            <IconButton
                className='toolbar-button'
                disabled={addDisabled}
                size='small'
                edge='start'
                color='success'
                aria-label='open drawer'
                sx={{ mr: 2 }}
                onClick={onAdd}
            >
                <AddIcon />
            </IconButton>

            <IconButton
                className='toolbar-button'
                disabled={editDisabled}
                size='small'
                edge='start'
                color='info'
                aria-label='open drawer'
                sx={{ mr: 2 }}
                onClick={onEdit}
            >
                <EditIcon />
            </IconButton>

            <IconButton
                className='toolbar-button'
                disabled={removeDisabled}
                size='small'
                edge='start'
                color='error'
                aria-label='open drawer'
                sx={{ mr: 2 }}
                onClick={onRemove}
            >
                <RemoveCircleOutlineIcon />
            </IconButton>
        </Toolbar>
    );
}
