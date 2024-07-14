import PatientsGrid from "./PatientsGrid.tsx";
import PatientsGridToolbar from "./PatientsGridToolbar.tsx";
import {useState} from "react";
import {PatientsGridRowModel} from "./PatientsGridRowModel.tsx";

export default function Patients()
{
    const [selectedRecords, setSelectedRecords] = useState<PatientsGridRowModel[]>([]);

    function onPatientAdd(): void
    {
        console.log('Adding a new patient');
    }

    function onPatientEdit(selectedRecords: object): void
    {
        if (selectedRecords.length < 1) {
            console.error('Nothing selected');

            return;
        }

        if (selectedRecords.length > 1) {
            console.error('Please select one patient');

            return;
        }

        let patientId = selectedRecords[0].patient_id;
        console.log(`Editing a patient with ID ${patientId}`);
    }

    function onPatientRemove(selectedRecords: object): void
    {
        if (selectedRecords.length < 1) {
            console.error('Nothing selected');

            return;
        }

        let idsToRemove = selectedRecords.map(function(record:PatientsGridRowModel) {
            return record.patient_id;
        });

        console.warn(`Removing patients with ID ${idsToRemove}`);
    }

    return (
        <>
            <PatientsGridToolbar
                onAdd={onPatientAdd}
                onEdit={() => onPatientEdit(selectedRecords)}
                onRemove={() => onPatientRemove(selectedRecords)}
            />
            <PatientsGrid onSelectionChanged={setSelectedRecords}/>
        </>
    );
}
