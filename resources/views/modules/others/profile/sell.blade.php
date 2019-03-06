<div class="form">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark text-center">
                <tr>
                    <th class="align-middle">Código Venta</th>
                    <th class="align-middle">Monto</th>
                    <th class="align-middle">Realizada</th>
                    <th class="align-middle"></th>
                </tr>
            </thead>
            <tbody class="text-center text-light align-middle">
                @foreach($sells as $sell)
                    <tr>
                        <td class="align-middle">{{ $sell->source }}</td>
                        <td class="align-middle">{{ $sell->monto_total }}</td>
                        <td class="align-middle">{{ $sell->created_at }}</td>
                        <td class="align-middle"><button type="submit" class="btn btn-success btn-galaxy" data-toggle="modal" data-target="#modal-sell-{{ $sell->id }}">Ver Detalles</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('modules.others.profile.selldetail') 
    </div>
</div>

