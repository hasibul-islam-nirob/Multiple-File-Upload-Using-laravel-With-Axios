
$('#addNewFile').on('click',function (){
    let newTableRow = "<tr>"+
                            "<td><input type='file' class='fileInput form-control'/></td>"+
                            "<td> <button type='button' class='uploadBtn btn btn-primary btn-sm'>Upload</button> </td>"+
                            "<td><button type='button' class='removeBtn btn btn-danger btn-sm'>Remove</button></td>"+
                            "<td class='fileSize'></td>"+
                            "<td class='totalUploaded'></td>"+
                            "<td class='uploadedPercent'></td>"+
                            "<td class='progressStatus'></td>"+
                        "</tr>";

    $('.fileList').append(newTableRow);


    $('.fileInput').on('change',function (){
        let file = $(this).prop('files');
        let fileSize =( (file[0].size) / (1024*1024) ).toFixed(2);
        $(this).closest('tr').find('.fileSize').html(fileSize+"MB");

    })

    $('.uploadBtn').on('click',function (event){
        let uploadFile      = $(this).closest('tr').find('.fileInput').prop('files');
        let totalUploaded   = $(this).closest('tr').find('.totalUploaded');
        let uploadedPercent = $(this).closest('tr').find('.uploadedPercent');
        let progressStatus  = $(this).closest('tr').find('.progressStatus');
        let formData = new FormData();
        formData.append('myFileKey',uploadFile[0]);
        onFileUploadFile(formData, totalUploaded, uploadedPercent, progressStatus);
        event.preventDefault();
        event.stopImmediatePropagation();
    })

    //Removed Row
    $('.removeBtn').on('click',function (){
        $(this).parents('tr').remove();
    })

})


function onFileUploadFile(formData, totalUploaded, uploadedPercent, progressStatus){

    let url = '/fileUploadUrl';
    let config = {
        headers:{'content-type':'multipart/form-data'},
        onUploadProgress:function (progessEvent){
            let upMb = (progessEvent.loaded / (1024*1024) ).toFixed(2) ;
            let upPerMb = ( (progessEvent.loaded*100) / progessEvent.total ).toFixed(2);

            totalUploaded.html(upMb+'MB');
            uploadedPercent.html(upPerMb+'%');
        }
    }


    axios.post(url, formData, config)
        .then(function (res){
            if (res.status == 200){
                progressStatus.html('Upload Success');
            }else{
                progressStatus.html('Upload Failed');
            }
        }).catch(function (err){
        progressStatus.html('Something Wrong');
    })



}
