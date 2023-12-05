import React from 'react';
import { Table } from 'flowbite-react';
const Obat = ({ data }) => {
    return (
        <div className="overflow-x-auto min-h-screen items-center bg-gray-800 px-10 a pt-24">
            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className='text-gray-300'>Data </span><span className="text-cyan-600">Obat</span>
                <p className='text-center text-2xl text-gray-200'>Menerangkan data obat yang tersedia di UKS</p>
            </h3>
            <div className="overflow-x-auto">
                <Table hoverable>
                    <Table.Head>
                        <Table.HeadCell className='bg-gray-400'>Nama Obat</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Fungsi Obat</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Jumlah Obat</Table.HeadCell>
                        <Table.HeadCell className='bg-gray-400'>Kadaluarsa</Table.HeadCell>
                    </Table.Head>
                    <Table.Body className="divide-y">
                        {data.map((obat) => (
                            <Table.Row className="bg-gray-300">
                                <Table.Cell className=" text-gray-900 dark:text-white">
                                    {obat.nama_obat}
                                </Table.Cell>
                                <Table.Cell>{obat.fungsi_obat}</Table.Cell>
                                <Table.Cell>{obat.jumlah_obat}</Table.Cell>
                                <Table.Cell>{obat.kadaluarsa}</Table.Cell>
                            </Table.Row>
                        ))}
                    </Table.Body>
                </Table>
            </div>
        </div>
    );
};

export default Obat;