import {IconButton, Toolbar} from '@mui/material';
import AddIcon from '@mui/icons-material/Add';
import EditIcon from '@mui/icons-material/Edit';
import RemoveCircleOutlineIcon from '@mui/icons-material/RemoveCircleOutline';

export default function PatientsGridToolbar({onAdd, onEdit, onRemove})
{
    return (
        <Toolbar>
            <IconButton
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
