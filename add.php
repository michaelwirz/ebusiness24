<div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Neuen Warentyp anlegen</h4>
            <p class="card-category">Geben Sie den Produktnamen, den Einkaufs- sowie den Verkaufspreis an. ID wird automatisch vergeben.</p>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="bmd-label-floating">Produktname</label>
                            <input type="text" required="1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Einkaufspreis</label>
                            <input min="0" step="0.01" value="0" placeholder=" " required="1" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Verkaufspreis</label>
                            <input min="0" step="0.01" value="0" placeholder=" " required="1" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Eintragen</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>