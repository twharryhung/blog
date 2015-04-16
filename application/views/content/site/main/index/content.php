<h1>登入</h1>

<form action="<?php echo base_url ('main', 'info'); ?>">
  <div>
    <div>
      <span>帳號：</span>
      <input type='text' name='account'>
    </div>
    <div>
      <span>密碼：</span>
      <input type='password' name='password'>
    </div>
  </div>
  <div>
    <button type='submit'>送出</button>
  </div>
</form>
<div>
  <a href="<?php echo base_url ('main', 'addUser'); ?>"></a>
</div>