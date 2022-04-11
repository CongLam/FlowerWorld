<div id="wrap-inner">
    <div id="your-info">
        <h3>Thông tin liên hệ - MinhAnh Shop</h3>
        <p>
            <span class="info">Tên: </span>
            {{ $info['name'] }}
        </p>
        <p>
            <span class="info">Email: </span>
            {{ $info['email'] }}
        </p>
        <p>
            <span class="info">Số điện thoai: </span>
            {{ $info['phone'] }}
        </p>
        <p>
            <span class="info">Tiêu đề: </span>
            {{ $info['subject'] }}
        </p>
        <p>
            <span class="info">Tin nhắn: </span>
            <i>{{ $info['message'] }}</i>
        </p>
    </div>
    <div id="confirm">
        <br>
        <p align="justify">
            <b>Cảm ơn bạn đã liện hệ!</b><br />
            MinhAnh shop sẽ xử lý và phản hồi bạn trong thời gian sớm nhất,
            Làm ơn hãy check email thường xuyên!  <br />
            <b><br />Trân trọng!</b>
        </p>
    </div>
</div>
