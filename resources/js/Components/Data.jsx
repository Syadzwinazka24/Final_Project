import React from 'react';
import { Table } from 'flowbite-react';

const Data = ({ data }) => {
    return (
        <div className="overflow-x-auto min-h-screen items-center bg-blue-900 px-10 a pt-24 pb-10">

            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className='text-gray-300'>Data </span><span className="text-cyan-600">Pasien</span>
                <p className='text-center text-2xl text-gray-200'>Ini adalah data-data pasien yang konsultasi ke UKS pada bulan November 2023</p>
            </h3>

            <div className='overflow-x-auto'>
                <Table hoverable>
                    <Table.Head>
                        <Table.HeadCell className='bg-gray-400'>No</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Nama Pasien</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Tanggal Lahir</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Kelas</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Jabatan</Table.HeadCell>
                    </Table.Head>
                    <Table.Body className="divide-y">
                    {data.map((pasien) => (
                        <Table.Row className="bg-gray-300">
                            <Table.Cell className="whitespace-nowrap font-medium text-gray-900">
                               {pasien.id}
                            </Table.Cell>
                            <Table.Cell className='text-gray-900'> { pasien.nama_pasien }</Table.Cell>
                            <Table.Cell className='text-gray-900'>{pasien.tanggal_lahir}</Table.Cell>
                            <Table.Cell className='text-gray-900'>{pasien.kelas}</Table.Cell>
                            <Table.Cell className='text-gray-900'>{pasien.jabatan.nama_jabatan}</Table.Cell>

                        </Table.Row>
                         ))}
                    </Table.Body>
                </Table>
            </div>
        </div>
    );
};

export default Data;