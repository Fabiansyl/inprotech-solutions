import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, usePage } from '@inertiajs/react';

export default function Dashboard() {
    const { stats } = usePage().props;

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8 space-y-6">
                    {/* Summary Cards */}
                    <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <StatCard label="Users" value={stats?.users ?? '—'} />
                        <StatCard label="Orders" value={stats?.orders ?? '—'} />
                        <StatCard label="Revenue (Tsh)" value={Number(stats?.revenue ?? 0).toLocaleString()} />
                        <StatCard label="Invoices" value={stats?.invoices ?? '—'} />
                    </div>

                    {/* Recent Orders Table */}
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6">
                            <h3 className="text-lg font-semibold text-gray-700 mb-4">Recent Orders</h3>
                            <div className="overflow-x-auto">
                                <table className="min-w-full divide-y divide-gray-200">
                                    <thead className="bg-gray-50">
                                        <tr>
                                            <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                                            <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                            <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total (Tsh)</th>
                                            <th className="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody className="bg-white divide-y divide-gray-200">
                                        {stats?.recentOrders?.length ? (
                                            stats.recentOrders.map((order) => (
                                                <tr key={order.id}>
                                                    <td className="px-4 py-2 whitespace-nowrap">{order.id}</td>
                                                    <td className="px-4 py-2 whitespace-nowrap">{order.customer}</td>
                                                    <td className="px-4 py-2 whitespace-nowrap">{Number(order.total).toLocaleString()}</td>
                                                    <td className="px-4 py-2 whitespace-nowrap">
                                                        <span className={`inline-flex px-2 text-sm font-medium rounded-full ${order.status === 'completed'
                                                                ? 'bg-green-100 text-green-800'
                                                                : order.status === 'pending'
                                                                    ? 'bg-yellow-100 text-yellow-800'
                                                                    : 'bg-gray-100 text-gray-800'
                                                            }`}>
                                                            {order.status}
                                                        </span>
                                                    </td>
                                                </tr>
                                            ))
                                        ) : (
                                            <tr>
                                                <td colSpan="4" className="px-4 py-3 text-center text-gray-500">
                                                    No recent orders.
                                                </td>
                                            </tr>
                                        )}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

function StatCard({ label, value }) {
    return (
        <div className="bg-white overflow-hidden shadow rounded-lg p-5">
            <dt className="text-sm font-medium text-gray-500 truncate">{label}</dt>
            <dd className="mt-1 text-2xl font-semibold text-gray-900">{value}</dd>
        </div>
    );
}
