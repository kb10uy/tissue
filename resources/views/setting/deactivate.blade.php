@extends('setting.base')

@section('title', 'アカウントの削除')

@section('tab-content')
    <h3>アカウントの削除</h3>
    <hr>
    <p>Tissueからあなたのアカウントに関する情報を削除します。<strong>削除はすぐに実行され、取り消すことはできません！</strong></p>
    <p>なお、なりすましを防止するためにユーザー名は記録されます。今後、同じ名前で再登録することはできません。</p>

    <form action="{{ route('setting.deactivate.destroy') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <p>上記の条件に同意してアカウントを削除する場合は、パスワードを入力して削除ボタンを押してください。</p>
            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

            @if ($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-danger mt-2">削除</button>
    </form>
@endsection

@push('script')
    <script src="{{ mix('js/setting/privacy.js') }}"></script>
@endpush
