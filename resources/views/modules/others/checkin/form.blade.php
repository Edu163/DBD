<style>
#check {
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<div class="card buy-card flex-fill" style="padding-top: 15%;">
    <div class="card-body buy-card-body">
        <!-- Línea 1 -->
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <form action="/checkin" method="POST">
                {{ csrf_field() }}
                <div style="vertical-align: middle;">Código: <input id="source" name="source" type="text" required></div>
                <button id="check" type="submit" class="btn btn-galaxy" style="margin-left: 40% !important;">Check</button>
            </form>
        </div>
    </div>
</div>