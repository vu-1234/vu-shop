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
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Mật khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Mật Khẩu:</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-bold">Xác nhận Mật Khẩu:</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">Số Điện Thoại:</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="gender">Giới tính:</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="" selected disabled>Chọn giới tính</option>
                                    <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Nam</option>
                                    <option value="0" {{ old('gender') == '0' ? 'selected' : '' }}>Nữ</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label fw-bold">Ngày Sinh:</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{ old('date') }}" required>
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="district" class="form-label fw-bold">Huyện:</label>
                                <input type="text" class="form-control" id="district" name="district"
                                    value="{{ old('district') }}" required>
                                @error('district')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ward" class="form-label fw-bold">Phường:</label>
                                <input type="text" class="form-control" id="ward" name="ward"
                                    value="{{ old('ward') }}" required>
                                @error('ward')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="province" class="form-label fw-bold">Tỉnh:</label>
                                <input type="text" class="form-control" id="province" name="province"
                                    value="{{ old('province') }}" required>
                                @error('province')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label fw-bold">Địa chỉ:</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-4">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
