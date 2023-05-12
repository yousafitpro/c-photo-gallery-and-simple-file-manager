<div class="row">
    @if(count($list)>0)
    @foreach($list as $item)
        <div class="col-md-3">
            <div class="card">

                <div class="card-body" style="padding: 2px">
                    <input hidden id="coppy_link{{$item->id}}" value="{{url($src.'/'.$item->store_by_name)}}">

                    <div style="position:relative; height: 150px" >

                        <div style="position: absolute; width: 100%;">
                            @if($item->extension=='pdf')
                                <img style="height: 150px; width: 100%" src="{{url('gallery icons/pdf.png')}}">
                            @elseif($item->extension=='png')
                                <img style="height: 150px; width: 100%" src="{{url($src.'/'.$item->store_by_name)}}">
                                @elseif($item->extension=='jpg')
                                <img style="height: 150px; width: 100%" src="{{url($src.'/'.$item->store_by_name)}}">
                                @elseif($item->extension=='jpeg')
                                <img style="height: 150px; width: 100%" src="{{url($src.'/'.$item->store_by_name)}}">
                            @else
                                <img style="height: 150px; width: 100%" src="{{url('gallery icons/file.png')}}">
                            @endif
                        </div>
                        <div style="position: absolute; bottom: 0px; background-color: white;width: 100%;">
                            <h3 style="color: gray; margin-left: 10px; margin-right: 10px">{{$item->name}}</h3>
                        </div>
                        <div style="position: absolute; right: 0; top: 0">
                            <div style="width: 100%;padding: 10px"  >
                                <i class="fa fa-ellipsis-h" style="zoom: 1.3; border: solid 1px gray; outline: solid 1px white; border-radius: 6px; padding-left: 8px;padding-right: 8px; padding-top: 2px;padding-bottom: 2px"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                <div class="dropdown-menu">
                                    <div class="arrow"></div>
                                    <a class="dropdown-item" href="#" onclick="copy_referer_id('coppy_link{{$item->id}}')">
                                        <i class="fa fa-copy" ></i>
                                        Copy Link</a>
                                    <a class="dropdown-item" href="{{url($src).'/'.$item->store_by_name}}" download>
                                        <i class="fa fa-download" ></i>
                                        Download</a>
                                    <a class="dropdown-item" href="#" onclick="delete_file('{{app_encrypt($item->id)}}')" >
                                        <i class="fa fa-trash" ></i>
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    @else
        <br>
        <br>
        <div style="width: 100%;">
            <h3 style="text-align: center">No Records Found</h3>
        </div>
        @endif
</div>
<script>
    function delete_file(id)
    {

        if(confirm('Are you sure'))
        {
            $.ajax({
                url:"{{url('Gallery/gallery-delete-file')}}/"+id,
                method:'get',
                data: {"_token": "{{ csrf_token() }}"},
                beforeSend:function(){
                },
                success:function(response){
                    $("#uc_gallery_modal").modal('hide')
                    load_gallery()
                },
                error: function (jqXHR, textStatus, errorThrown) {


                },
                complete:function(data){

                }
            })
        }
    }
</script>
