<!-- resources/views/hitung_sedimen.blade.php -->

<h1>Hasil Perhitungan Sedimen</h1>

<form action="" method="post">
@csrf
<div class="form-group">
    <label for=""></label>
</div>
<p>Laju deposisi sedimen (D) adalah: {{ $D }} g/s</p>
<p>Prediksi jumlah sedimen dalam 1 bulan: {{ $Q }} g</p>
</form>