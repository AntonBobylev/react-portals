import {useEffect, useMemo, useState} from 'react';
import {
    MaterialReactTable,
    MRT_ColumnDef, MRT_Row,
    useMaterialReactTable
} from 'material-react-table';
import {PatientsGridRowModel} from './PatientsGridRowModel.tsx';

export default function ({onSelectionChanged})
{
    //data and fetching state
    const [data, setData] = useState<PatientsGridRowModel[]>([]);
    const [total, setTotal] = useState(0); // todo: remove if this is useless

    useEffect(() => {
        const fetchData = async () => {
            const url = new URL('http://localhost:7000/getPatients');
            try {
                const response = await fetch(url.href);
                const json = await response.json();

                setData(json.data);
                setTotal(json.total);
            } catch (error) {
                console.error(error);
                return;
            }
        };

        fetchData().then(() => {});
    }, []);

    const columns = useMemo<MRT_ColumnDef<PatientsGridRowModel>[]>(
        () => [{
            accessorKey: 'patient_id',
            header: 'ID',
            size: 50
        }, {
            accessorKey: 'patient_name.patient_last_name',
            header: 'Last Name',
            size: 150
        }, {
            accessorKey: 'patient_name.patient_first_name',
            header: 'First Name',
            size: 150
        }, {
            accessorKey: 'patient_name.patient_middle_name',
            header: 'Middle name',
            size: 150
        }, {
            accessorKey: 'patient_gender',
            header: 'Gender',
            size: 100
        }, {
            accessorKey: 'patient_dob',
            header: 'Date of birth',
            size: 100
        }],
        [],
    );

    const table = useMaterialReactTable({
        columns,
        data,
        enableRowSelection: true
    });

    useEffect(() => {
        let selectedRows = table.getSelectedRowModel().rows,
            selectedRecords = [];

        selectedRows.forEach(function(row:MRT_Row<PatientsGridRowModel>) {
            selectedRecords.push(row.original);
        });

        onSelectionChanged(selectedRecords);
    }, [table.getState().rowSelection]);

    return <MaterialReactTable table={table} />;
}
