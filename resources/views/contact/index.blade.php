@extends('layouts.default')
<style>
    .form{
      width: 50%;
      margin: 0 auto;
    }
    .asterisk{
      color: red;
    }
    .example{
      color: silver;
      margin-left: 210px;
    }
    input{
      padding: 15px 0;
    }
    .form-item-input{
      display: inline-block;
      padding: 10px 10px 0 10px;
    }
    .form-label-radio{
      padding: 20px;
    }
    input[type=radio] {
    width: 30px;
    height: 30px;
    vertical-align: middle;
    }
    textarea{
      resize: none;
      height: 100px;
    }
    .form-item-textarea{
      margin: 10px;
    }
</style>
@section('tittle', 'お問い合わせ')

@section('content')
<form method="POST" action="{{route('contact.confirm')}}">
  @csrf
  <div class="form">
    <div class="form-item">
      <label class="form-item-label">
        お名前<span class="asterisk">※</span>
      </label>
      <div class="form-item-input">
        <input type="text" 
          name="lastname" 
          value="{{old('lasttname}}"
          style="margin-right:10px">
        @if ($errors->has('lastname'))
          <p class="error-message">{{ $errors->first('lastname') }}</p>
        @endif
        <input type="text" 
          name="firstname"
          value="{{old('firstname'}}">
        @if ($errors->has('firstname'))
          <p class="error-message">{{ $errors->first('firstname') }}</p>
        @endif
      </div>
      <div class="example-fullname">
        <p class="example">例）山田　　　　　　例）太郎</p>
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        性別<span class="asterisk">※</span>
      </label>
      <div class="form-label-radio">
        <input type="radio" name="gender" value="male"    style="accent-color:black;" checked>男性
        <input type="radio" name="gender" value="female" style="accent-color:black;">女性
      </div>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        メールアドレス<span class="asterisk">※</span>
      </label>
      <div class="form-item-input">
        <input type="email" 
          name="email" 
          value="{{old('email'}}"
          style="width:300px">
        @if ($errors->has('email'))
          <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <p class="example">例）test@example.com</p>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        郵便番号<span class="asterisk">※</span>
      </label>
      <div class="form-item-input">
        <span style="font-weight: bold;">〒</span>
        <input type="text" 
          name="postcode" 
          pattern="\d{3}-\d{4}" 
          value="{{old('postcode'}}"
          style="width:278px">
        @if ($errors->has('postcode'))
          <p class="error-message">{{ $errors->first('postcode') }}</p>
        @endif
      </div>
      <p class="example">例）123-4567</p>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        住所<span class="asterisk">※</span>
      </label>
      <div class="form-item-input">
        <input type="text" 
          name="address" 
          value="{{old('address'}}"
          style="width:300px">
        @if ($errors->has('address'))
          <p class="error-message">{{ $errors->first('address') }}</p>
        @endif
      </div>
      <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        建物名
      </label>
      <div class="form-item-input">
        <input type="text" 
          name="building" 
          value="{{old('building'}}"
          style="width:300px">
      </div>
      <p class="example">例）千駄ヶ谷マンション101</p>
    </div>
    <div class="form-item">
      <label class="form-item-label">
        ご意見<span class="asterisk">※</span>
      </label>
      <textarea name="opinion" class="form-item-textarea" maxlength="120" style="width:300px">
      {{ old('opinion') }}
      </textarea>
      @if ($errors->has('opinion'))
        <p class="error-message">{{ $errors->first('opinion') }}</p>
      @endif
    </div>
    <div class="btn">
      <input type="submit" class="form-btn" value="確認">
    </div>
  </div>
</form>
@endsection