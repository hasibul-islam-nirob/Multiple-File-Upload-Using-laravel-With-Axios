@extends('Layout.App')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button type="button" class="btn btn-success">Add New Input</button>
                <hr>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="font-weight-bold">Input File</th>
                            <th class="font-weight-bold">Upload</th>
                            <th class="font-weight-bold">Cancel</th>
                            <th class="font-weight-bold">File Size</th>
                            <th class="font-weight-bold">Total Uploaded</th>
                            <th class="font-weight-bold">Uploaded Percent</th>
                            <th class="font-weight-bold">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> <input type="file"/> </td>
                            <td><button type="button" class="btn btn-primary btn-sm">Upload</button></td>
                            <td><button type="button" class="btn btn-danger btn-sm">Cancel</button></td>
                            <td>50 MB</td>
                            <td>20 MB</td>
                            <td>10%</td>
                            <td>Success</td>
                        </tr>

                        <tr>
                            <td> <input type="file"/> </td>
                            <td><button type="button" class="btn btn-primary btn-sm">Upload</button></td>
                            <td><button type="button" class="btn btn-danger btn-sm">Cancel</button></td>
                            <td>100 MB</td>
                            <td>50 MB</td>
                            <td>50%</td>
                            <td>Uploading..</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
