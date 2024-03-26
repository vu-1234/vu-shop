<div class="card py-4 px-5">
    <form action="{{ route('web.edit-info-update.post', ['id' => $user->id]) }}" method="POST" class="row">
        @csrf
        @method('put')

        <div class="col-4 mb-3">
            <label for="name" class="form-label fw-bold">Tên:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}"
                required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="email" class="form-label fw-bold">Email:</label>
            <input type="email" class="form-control" id="email" name="email"
                value="{{ Auth::user()->email }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="password" class="form-label fw-bold">Mật Khẩu:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="password_confirmation" class="form-label fw-bold">Xác nhận Mật
                Khẩu:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                required>
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="phone" class="form-label fw-bold">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="{{ Auth::user()->phone }}" required>
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label class="form-label fw-bold" for="gender">Giới tính:</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="" selected disabled>Chọn giới tính</option>
                <option value="1" {{ Auth::user()->gender == '1' ? 'selected' : '' }}>Nam
                </option>
                <option value="0" {{ Auth::user()->gender == '0' ? 'selected' : '' }}>Nữ
                </option>
            </select>
            @error('gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="date" class="form-label fw-bold">Ngày Sinh:</label>
            <input type="date" class="form-control" id="date" name="date"
                value="{{ Auth::user()->date }}" required>
            @error('date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="district" class="form-label fw-bold">Huyện:</label>
            <input type="text" class="form-control" id="district" name="district"
                value="{{ Auth::user()->district }}" required>
            @error('district')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="ward" class="form-label fw-bold">Phường:</label>
            <input type="text" class="form-control" id="ward" name="ward"
                value="{{ Auth::user()->ward }}" required>
            @error('ward')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="province" class="form-label fw-bold">Tỉnh:</label>
            <input type="text" class="form-control" id="province" name="province"
                value="{{ Auth::user()->province }}" required>
            @error('province')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-4 mb-3">
            <label for="address" class="form-label fw-bold">Địa chỉ:</label>
            <input type="text" class="form-control" id="address" name="address"
                value="{{ Auth::user()->address }}" required>
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-12">
            <div class="row justify-content-end">
                <div class="col-auto">
                    <button type="button" class="btn btn-secondary">
                        <a href="/" class="text-white text-decoration-none">
                            Hủy bỏ
                        </a>
                    </button>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </div>
            </div>
        </div>

    </form>
</div>
