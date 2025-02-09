<div class="row">
    <div class="col">
        <h1 class="display-4 text-primary">APB Desa Kebonsari Tahun {{$data->tahun}}</h1>
        <p class="lead">
            Jl. Waringin Tunggal, Jumog, Kebonsari, Kec. Kb. Sari, Kabupaten Madiun, Jawa Timur
            63173
        </p>
        <div class="year">
            <select class="form-select-lg">
                @foreach($tahun as $th)
                    <option value='{{$th->tahun}}'>{{$th->tahun}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="card border-success mb-3">
            <div class="card-header text-success">Pendapatan</div>
            <div class="card-body">
                <h2 class="card-title">Rp. {{number_format($data->pendapatan)}}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-danger mb-3">
            <div class="card-header text-danger">Belanja</div>
            <div class="card-body">
                <h2 class="card-title">Rp. {{number_format($data->belanja)}}</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card border-success mb-3">
            <div class="card-header text-success">Penerimaan</div>
            <div class="card-body">
                <h2 class="card-title">Rp {{number_format($data->penerimaan)}}</h2>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-danger mb-3">
            <div class="card-header text-danger">Pengeluaran</div>
            <div class="card-body">
                <h2 class="card-title">Rp {{number_format($data->pengeluaran)}}</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card border-info mb-3">
            <div class="card-header text-info">Surplus/Defisit</div>
            <div class="card-body">
                <h2 class="card-title text-success">Rp {{number_format($data->surplus_defisit)}}</h2>
            </div>
        </div>
    </div>
</div>
