<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Danh Sách Thành Viên</h1>
                        <ol class="breadcrumb mb-g4">
                            <li class="breadcrumb-item active"><a href="./">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="?controller=listMember">Thành viên</a></li>
                            <li class="breadcrumb-item">Danh sách</li>
                        </ol>
                        <div id="main">		
      <div class="container">
        <h2>Sửa thành viên</h2>
        <!-- Start of Form -->
    <form method="POST"  >
      <div class="form-group">
        <label for="id">Id</label>
        <input type="text" class="form-control" name="id" id="id" value="<?php echo $data['id']; ?>" >
      </div>
      <div class="form-group">
        <label for="tendn">Tên đăng nhập</label>
        <input type="text" class="form-control" name="tendn" id="tendn" value="<?php echo $data['tendn']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Mật khẩu</label>
        <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $data['pass']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Tên đầy đủ</label>
        <input type="text" class="form-control" name="tendd" id="tendd" value="<?php echo $data['tendd']; ?>">
      </div>
      <div class="form-group">
        <label for="quyen">Quyền</label>
        <input type="text" class="form-control" name="quyen" id="quyen" value="<?php echo $data['quyen']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo $data['email']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Điện thoại</label>
        <input type="text" class="form-control" name="dienthoai" id="dienthoai" value="<?php echo $data['dienthoai']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Địa chỉ</label>
        <input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $data['diachi']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Ngày sinh</label>
        <input type="text" class="form-control" name="ngaysinh" id="ngaysinh" value="<?php echo $data['ngaysinh']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Giới tính</label>
        <input type="text" class="form-control" name="gioitinh" id="gioitinh" value="<?php echo $data['gioitinh']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Dân tộc</label>
        <input type="text" class="form-control" name="dantoc" id="dantoc" value="<?php echo $data['dantoc']; ?>">
      </div>
      <div class="form-group">
        <label for="tendd">Giới thiệu</label>
        <input type="text" class="form-control" name="gioithieu" id="gioithieu" value="<?php echo $data['gioithieu']; ?>">
      </div>
      <div class="input-group-btn">
        <td style = "padding-left: 0;"> 
        <button class="btn btn-danger" name="editMember" type="submit" >Sửa</button>
        </td>
                
      </div>
  </form>
  <!-- End Form -->
		<br/>        
      </div>
    </div>
                    </div>
                </main>