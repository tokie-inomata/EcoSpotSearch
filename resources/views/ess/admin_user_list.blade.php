@extends('layouts.user')

@section('main')
    <h2 class="title">全ユーザー一覧</h2>
    <form action="" method="get" class="search-box">
        <input type="text" size="50" name="admin_user_search"><input type="submit" value="検索">
    </form>
    <div class="result-number">
        <form action="" method="get">
            <select type="text" class="number" name="paginate">
                @if($paginate == 10)
                    <option value="10" selected>10件</option>
                @else
                    <option value="10">10件</option>
                @endif
                @if($paginate == 30)
                    <option value="30" selected>30件</option>
                @else
                    <option value="30">30件</option>
                @endif
                @if($paginate == 50)
                    <option value="50" selected>50件</option>
                @else
                    <option value="50">50件</option>
                @endif
            </select>
            <input type="submit" value="表示">
        </form>
    </div>
    <div class="user-list-reslut">
        <table class="user-list-table">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>変更</th>
            </tr>
            @foreach($user as $k )
                @if($k->blacklist_flg == 1)
                    <tr class="blasklist-user">
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->name }}</td>
                        <td>{{ $k->email }}</td>
                        <td><a href="/admin/user/edit?id={{ $k->id }}" class="admin-user-edit">変更</a></td>
                    </tr>
                @else
                    <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->name }}</td>
                        <td>{{ $k->email }}</td>
                        <td><a href="/admin/user/edit?id={{ $k->id }}" class="admin-user-edit">変更</a></td>
                    </tr>
                @endif
            @endforeach
        </table>
        {{ $user->appends($search_param)->links() }}
    </div>
@endsection