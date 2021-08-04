<div class="form-wrapper one">
    <div class="form">
        <form data-validation="true" action="/csv" class="csv-upload" method="post" enctype="multipart/form-data">
            @csrf
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-inner">
                <div class="alert alert-danger form-error hidden"  for="file">
                </div>
                <input class="form-control form-control-lg" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                <button type="submit"  class="btn btn-primary mt-3">Upload</button>
            </div>
        </form>
    </div>
</div>