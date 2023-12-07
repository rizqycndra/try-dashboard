import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { Button } from '@radix-ui/themes';
import { Table } from '@radix-ui/themes';

export default function Supplier({ auth, supplier }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Supplier</h2>}
        >
            <Head title="Supplier" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <Link href={route('supplier.create')}>
                        <Button variant="outline" color="blue">
                            Create Supplier
                        </Button>
                    </Link>

                    <Table.Root className='[&_*]:!text-white mt-6'>
                        <Table.Header>
                            <Table.Row>
                                <Table.ColumnHeaderCell>Nama</Table.ColumnHeaderCell>
                                <Table.ColumnHeaderCell>Alamat</Table.ColumnHeaderCell>
                                <Table.ColumnHeaderCell>Kontak</Table.ColumnHeaderCell>
                                <Table.ColumnHeaderCell>Email</Table.ColumnHeaderCell>
                            </Table.Row>
                        </Table.Header>

                        <Table.Body>
                            {
                                supplier.map((e, i) => (
                                    <Table.Row key={i}>
                                        <Table.RowHeaderCell>{e.name}</Table.RowHeaderCell>
                                        <Table.Cell>{e.address}</Table.Cell>
                                        <Table.Cell>{e.contact}</Table.Cell>
                                        <Table.Cell>{e.email}</Table.Cell>
                                    </Table.Row>))
                            }
                        </Table.Body>
                    </Table.Root>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
