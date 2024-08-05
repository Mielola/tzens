<?php
namespace App\Filament\Widgets;

use App\Models\Organisasi;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class AdminStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Hitung jumlah organisasi
        $countOrganisasi = Organisasi::count();

        // Ambil nama organisasi pertama atau 'N/A' jika tidak ada
        $namaOrganisasi = Organisasi::first()->nama_organisasi ?? 'N/A';

        // Hitung jumlah pengguna hari ini dan minggu lalu
        $now = Carbon::now();
        $startOfToday = $now->startOfDay(); // Mulai hari ini
        $endOfToday = $now->endOfDay(); // Akhir hari ini

        $startOfLastWeek = $now->copy()->subWeek()->startOfWeek(); // Mulai minggu lalu
        $endOfLastWeek = $now->copy()->subWeek()->endOfWeek(); // Akhir minggu lalu

        $currentDayUsers = User::whereBetween('created_at', [$startOfToday, $endOfToday])->count();
        $lastWeekUsers = User::whereBetween('created_at', [$startOfLastWeek, $endOfLastWeek])->count();

        // Tentukan deskripsi dan warna berdasarkan perubahan
        $increase = $currentDayUsers > $lastWeekUsers;
        $description = $increase ? 'Peningkatan hari ini' : 'Penurunan hari ini';
        $descriptionIcon = $increase ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
        $color = $increase ? 'success' : 'danger';

        return [
            Stat::make('Users', User::count())
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Total User Terdaftar')
                ->color('success'),
            Stat::make('Organisasi', $countOrganisasi)
                ->description('Organisasi Terdaftar'),
            Stat::make('New User Registrations', $currentDayUsers)
                ->description($description)
                ->descriptionIcon($descriptionIcon)
                ->color($color),
        ];
    }

}
