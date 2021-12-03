@extends('Layout.App')

@section('title','Multiple File Upload Using Laravel With Axios')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button type="button" id="addNewFile" class="btn btn-success">Add New File</button>
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

                    <tbody class="fileList">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
