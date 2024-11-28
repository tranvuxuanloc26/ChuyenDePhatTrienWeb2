@extends('admin.main')

@section('content')


   <table>
      <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Ngày Đặt Hàng</th>
            <th>Trạng thái </th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customers as $key => $customer)
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone}}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->created_at }}</td>
            @php
            $statusTranslations = [
            'pending' => 'Đang chờ',
            'processing' => 'Đang xử lý',
            'delivered' => 'Đang giao hàng',
            'completed' => 'Hoàn thành',
            'cancelled' => 'Đã hủy',
            ];
            $statusColors = [
            'pending' => 'text-warning',
            'processing' => 'text-primary',
            'completed' => 'text-success',
            'cancelled' => 'text-danger',
            'delivered' => 'text-info',
            ];
            @endphp
            <td>
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button"
                        id="dropdownMenuButton{{ $customer->id }}" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="{{ $statusColors[$customer->status] ?? '' }}" id="statusText{{ $customer->id }}">
                            {{ $statusTranslations[$customer->status] ?? $customer->status }}
                        </span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $customer->id }}">
                        @foreach ($statusTranslations as $status => $translation)
                        <a class="dropdown-item" href="#" onclick="confirmStatusChange('{{ $customer->id }}', '{{ $status }}')">
                            <span class="{{ $statusColors[$status] ?? '' }}">{{ $translation }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}">
                    <i class="fas fa-eye"></i>
                </a>
               
            </td>
        </tr>
        @endforeach
        
      </tbody>
   </table>
   {{  $customers->links('pagination::bootstrap-4')  }}

   <!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Xác nhận thay đổi trạng thái</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn thay đổi trạng thái đơn hàng này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="confirmButton">Xác nhận</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    let selectedCustomerId;
    let selectedStatus;
    function confirmStatusChange(customerId, status) {
        selectedCustomerId = customerId;
        selectedStatus = status;
        $('#confirmModal').modal('show');
    }
    $('#confirmButton').click(function() {
        $.ajax({
            url: '/admin/customers/update-status',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                customer_id: selectedCustomerId,
                status: selectedStatus
            },
            success: function(response) {
                if (response.success) {
                    let statusTranslations = {
                        'pending': 'Đang chờ',
                        'processing': 'Đang xử lý',
                        'delivered': 'Đang giao hàng',
                        'completed': 'Hoàn thành',
                        'cancelled': 'Đã hủy',
                    };
                    let statusColors = {
                        'pending': 'text-warning',
                        'processing': 'text-primary',
                        'completed': 'text-success',
                        'cancelled': 'text-danger',
                        'delivered': 'text-info'
                    };
                    $('#statusText' + selectedCustomerId).text(statusTranslations[selectedStatus]);
                    $('#statusText' + selectedCustomerId).attr('class', statusColors[selectedStatus]);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr) {
                alert(xhr.responseJSON.message);
            }
        });
        $('#confirmModal').modal('hide');
    });
</script>
@endsection
 		

