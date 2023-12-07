import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import InputError from '@/Components/InputError';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';

export default function Supplier({ auth }) {

    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        address: '',
        contact: '',
        email: '',
    });

    const submit = (e) => {
        e.preventDefault()

        post(route('supplier.store'))
    }

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Create Supplier</h2>}
        >
            <Head title="Create Supplier" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8 !text-white">

                    <form onSubmit={submit}>

                        <div>
                            <InputLabel>Nama</InputLabel>
                            <TextInput
                                className="w-full mt-2"
                                value={data.name}
                                onChange={e => setData('name', e.target.value)}
                                name="name"
                                placeholder="Nama Supplier"
                            />
                            <InputError message={errors.name} className="mt-2" />
                        </div>

                        <div className="mt-4">
                            <InputLabel>Alamat</InputLabel>
                            <TextInput
                                className="w-full mt-2"
                                value={data.address}
                                onChange={e => setData('address', e.target.value)}
                                name="contact"
                                placeholder="Alamat"
                            />
                            <InputError message={errors.address} className="mt-2" />
                        </div>

                        <div className="mt-4">
                            <InputLabel>Kontak</InputLabel>
                            <TextInput
                                className="w-full mt-2"
                                value={data.contact}
                                onChange={e => setData('contact', e.target.value)}
                                name="contact"
                                placeholder="Kontak Supplier"
                            />
                            <InputError message={errors.contact} className="mt-2" />
                        </div>

                        <div className="mt-4">
                            <InputLabel>Email</InputLabel>
                            <TextInput
                                className="w-full mt-2"
                                value={data.email}
                                onChange={e => setData('email', e.target.value)}
                                name="email"
                                placeholder="supplier@email.com"
                            />
                            <InputError message={errors.email} className="mt-2" />
                        </div>

                        <PrimaryButton className='mt-6' disabled={processing}>Simpan</PrimaryButton>

                    </form>

                </div>
            </div>
        </AuthenticatedLayout>
    );
}
