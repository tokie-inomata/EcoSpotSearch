@extends('layouts.main')

@section('main')
    <h2 class="title">資源回収ボックスを登録します</h2>
    <div class="spot-create-form">
        <form action="{{ route('spot.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <dl>
                <dt>登録スポット名</dt>
                @if($errors->has('name'))
                    エラー:{{ $errors->first('name') }}
                @endif
                <dd><input type="text" name="name"></dd>
                <dt>住所<br><br><br></dt>
                    @if($errors->has('prefecture'))
                        エラー:{{ $errors->first('prefecture') }}
                    @endif
                    @if($errors->has('city'))
                        エラー:{{ $errors->first('city') }}
                    @endif
                    @if($errors->has('house_number'))
                        エラー:{{ $errors->first('house_number') }}
                    @endif
                    <dd>
                        <select name="prefecture">
                            @foreach(config('pref') as $k => $val)
                                @foreach($val as $k2 => $val2 )
                                    <option value="{{ $val2 }}">{{ $val2 }}</option>
                                @endforeach
                            @endforeach
                        </select><br>
                        <input type="text" name="city" placeholder="○○市××区"><br>
                        <input type="text" name="house_number"><br>
                    </dd>
                <dt>品目</dt>
                @if($errors->has('recycling_item'))
                    エラー:{{ $errors->first('recycling_item') }}
                @endif
                    <dd>
                        @foreach( $recycling_item as $k )
                            <input type="checkbox" name="recycling_item_id[]" value="{{ $k->id }}">{{ $k->recycling_item }}
                        @endforeach
                    </dd>
                <dt>画像</dt>
                @if($errors->has('image_path'))
                    エラー:{{ $errors->first('image_path') }}
                @endif
                    <dd>
                        <input type="file" name="image_path">
                    </dd>
            </dl>
            <input type="hidden" name="users_id" value="{{$users_id}}">
            <input type="submit" name="spot_add" class="button spot-add-button" value="登録">
        </form>
    </div>    
@endsection