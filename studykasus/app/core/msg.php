<?php 
class msg{
    public static function setmsg($pesan,$aksi,$tipe){
        $_SESSION['msg'] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe
        ];
    }
    public static function getmsg(){
        if(isset($_SESSION['msg'])){
                        $msg = $_SESSION['msg'];
            // Pilih warna Tailwind berdasarkan tipe pesan
            $color = [
                'success' => 'green',
                'danger'  => 'red',
                'warning' => 'yellow',
                'info'    => 'blue'
            ][$msg['tipe']] ?? 'blue';

            // Alert Tailwind
            echo '<div class="mb-4 flex items-center gap-2 px-4 py-3 rounded-lg bg-'.$color.'-100 border-l-4 border-'.$color.'-500 text-'.$color.'-700 shadow font-semibold">';
            // Icon
            if($msg['tipe'] === 'danger') {
                // Icon error
                echo '<svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>';
            } else {
                // Icon info/success/warning
                echo '<svg class="w-5 h-5 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01" /></svg>';
            }
            echo htmlspecialchars($msg['pesan']) . ' <span class="font-normal">(' . htmlspecialchars($msg['aksi']) . ')</span>';
            echo '</div>';
            unset($_SESSION['msg']);
        }
    }
}