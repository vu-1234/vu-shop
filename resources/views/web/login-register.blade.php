<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="row">

            <div class="col-6">
                <div class="card">
                    <div class="card-body" style="padding: 50px">
                        <h4 class="text-center fw-bold mb-4">
                            ĐĂNG NHẬP
                        </h4>
                        <!-- Login Form -->
                        <form method="POST" action="{{ route('web.login.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <a href="" class="mt-4">Quên mật khẩu</a>
                            <button type="submit" class="btn btn-primary w-100 mt-2">Đăng Nhập</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-body" style="padding: 50px">
                        <h4 class="text-center fw-bold mb-4">
                            ĐĂNG KÝ
                        </h4>
                        <!-- Registration Form -->
                        <form method="POST" action="{{ route('web.register.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Tên:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Mật Khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">Số Điện Thoại:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="gender">Giới tính:</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="" selected disabled>Chọn giới tính</option>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label fw-bold">Ngày Sinh:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="district" class="form-label fw-bold">Huyện:</label>
                                <input type="text" class="form-control" id="district" name="district" required>
                            </div>
                            <div class="mb-3">
                                <label for="ward" class="form-label fw-bold">Phường:</label>
                                <input type="text" class="form-control" id="ward" name="ward" required>
                            </div>
                            <div class="mb-3">
                                <label for="province" class="form-label fw-bold">Tỉnh:</label>
                                <input type="text" class="form-control" id="province" name="province" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label fw-bold">Địa chỉ:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-4">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
