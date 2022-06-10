@extends('layouts.default')
<style></style>

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  <div class="form">
    <div class="form-item">
      <label class="form-item-label">お名前</label>
      <div class="form-item-input">
        {{ $inputs['lastname'] }}
        <input type="hidden" 
          name="lastname" 
          value="{{ $inputs['lastname'] }}">
        {{ $inputs['firstname'] }}
        <input type="hidden" 
          name="firstname"
          value="{{ $inputs['firstname'] }}">
      </div>
    </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">性別</label>
        "{{ $inputs['gender'] }}"
    </div>
    <div class="form-item">
      <label class="form-item-label">メールアドレス</label>
      <div class="form-item-input">
        {{ $inputs['email'] }}
        <input type="hidden" 
          name="email" 
          value="{{ $inputs['email'] }}">
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">郵便番号</label>
      <div class="form-item-input">
        {{ $inputs['postcode'] }}
        <input type="hidden" 
          name="postcode" 
          pattern="\d{3}-\d{4}" 
          value="{{ $inputs['postcode'] }}">
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">住所</label>
      <div class="form-item-input">
        {{ $inputs['address'] }}
        <input type="hidden" 
          name="address" 
          value="{{ $inputs['address'] }}">
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">建物名</label>
      <div class="form-item-input">
        {{ $inputs['building'] }}
        <input type="hidden" 
          name="building" 
          value="{{ $inputs['building'] }}">
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">ご意見</label>
        {{ $inputs['opinion'] }}
        <input type="hidden"
          name="opinion"
          value="{{ $inputs['opinion'] }}">
    </div>
    <div class="btn">
      <input type="submit" name="action" class="form-btn" value="送信">
    </div>
    <button type="submit" name="fix" value="back">
      修正する
    </button>
  </div>
</form>
@endsection
