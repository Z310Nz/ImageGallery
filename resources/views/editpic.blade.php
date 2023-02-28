@extends('layouts.upload')
@section('content')
<div class="header">
        <h1 id="hd">แก้ไขรายละเอียดผลงาน</h1>

        <div class="upload">
            <div class="preview">
                <h3>ภาพตัวอย่าง</h3>
                <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                </form>
                <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100%; max-width: 100%;" alt="" srcset="">
            </div>

            <div class="details">
                <div class="headdetails">
                    <h3>รายละเอียดผลงาน</h3>
                </div>

                <form action="/editpic/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('put')
                    <div class="details-img">
                        <div class="add-img">
                            <p><b>เพิ่มไฟล์ผลงาน</b></p>
                             <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
                        </div>

                        <div class="name-img">
                            <p><b>ชื่อผลงาน</b></p>
                             <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
                        </div>

                        <div class="name-img">
                            <p><b>ชื่อผู้ถ่าย</b></p>
                            <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                        </div>

                        <div class="description-img">
                            <p><b>รายละเอียดผลงาน</b></p>
                            <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea> <!-- รายละเอียด -->
                        </div>

                         <!-- <div class="type-img">
                           <p><b>หมวดหมู่รูปภาพ</b></p>
                            <select name="type" id="type">
                                <option value="img"></option>
                            </select>
                        </div>
                        <div class="collection-img">
                            <p><b>เลือกคอลเลกชัน</b></p>
                            <a href="collectioncreate.html"><img src="{{asset('assets/img/upload/createcollec.png') }}" id="collec" width="170px"></a>
                        </div> -->

                             <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection