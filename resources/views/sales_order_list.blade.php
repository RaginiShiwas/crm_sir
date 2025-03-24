@extends('layouts.app')
@section('contant')

<div class="content">

<div class="mb-9">
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Sales Order Register List</h2>
        </div>
    </div>

    <div id="orderTable" data-list='{"valueNames":["Sr","order_number "," PO Date","Customer Name","Product Code","Description","Quantity","Rate","Balance"],"page":10,"pagination":true}'>    
        <div class="mb-4">
            <div class="row g-3">
                
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                    
                <div class="col-auto">
                    <button onclick="exportTableToExcel()" class="btn btn-primary">Export to Excel</button>
                    <button class="btn btn-primary" onclick="exportTableToPDF()">Export to PDF</button>
                    <a href="{{ url('/sales_order') }}" class="btn btn-primary">Add Sales Order</a>
                    <button id="viewAllEntries" class="btn btn-primary">View All Entries</button>
                </div>
            </div>
        </div>
</div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">

            <div class="table-responsive" style="overflow-x: auto;">
              <table id="salesOrderTable" class="table table-sm fs--1 mb-0 ">
                  <thead>
                      <tr>
                          <th class=" white-space-nowrap align-left" scope="col" data-sort="Sr">Sr</th>
                          <th class="align-left" scope="col" data-sort="order_number">Order Number</th>
                          <th class=" align-left" scope="col" data-sort="PO Date">PO Date</th>
                          <th class="align-left" scope="col" data-sort="Customer Name">Customer Name</th>
                          <th class=" align-left" scope="col" data-sort="Product Code">Product Code</th>
                          <th class="align-left" scope="col" data-sort="Description">Description</th>
                          <th class=" align-left " scope="col" data-sort="Quantity align-right">Quantity</th>
                          <th class=" align-left" scope="col" data-sort="Rate">Rate</th>
                          <th class="align-left" scope="col" data-sort="Balance">Balance</th>
                      </tr>
                  </thead>

                  <tbody class="list" id="order-table-body">
                      @foreach($salesOrders as $index => $order)
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="align-left">{{ $index + 1 }}</td>
                              <td class="align-left">{{ $order->so_number }}</td>
                              <td class="align-left">{{ \Carbon\Carbon::parse($order->sodate)->format('d-m-Y') }}</td>
                              <td class="align-left">{{ $order->customer->vendorname }}</td>
                              <td class="align-left">{{ $order->product->itemcode }}</td>
                              <td class="align-left">{{ $order->product->itemname }}</td>
                              <td class="align-right">{{ $order->quantity }}</td>
                              <td class="align-right">{{ $order->rate }}</td>
                              <td class="align-right">{{ $order->order_balance }}</td>
                              
                          </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>

        </div>

    </div>

    <script>
        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
            navbarTop.classList.add('navbar-darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVertical && navbarVerticalStyle === 'darker') {
            navbarVertical.classList.add('navbar-darker');
        }

        function exportTableToPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF({
                orientation: 'landscape',
                unit: 'pt',
                format: 'A4'
            });

            const rows = [];
            document.querySelectorAll('#order-table-body tr').forEach(row => {
                const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                rows.push(rowData);
            });

            const numColumns = 9;
            const pageWidth = doc.internal.pageSize.width;
            const margin = 40;
            const usableWidth = pageWidth - (2 * margin);
            const columnWidth = usableWidth / numColumns;

            const columnStyles = {};
            for (let i = 0; i < numColumns; i++) {
                columnStyles[i] = { cellWidth: columnWidth };
            }

            doc.autoTable({
                head: [['Sr', 'Order Number', 'PO Date', 'Customer Name', 'Product Code', 'Description', 'Quantity', 'Rate', 'Balance']],
                body: rows,
                theme: 'striped',
                styles: { 
                    fontSize: 10,
                    cellPadding: 3,
                    overflow: 'linebreak'
                },
                headStyles: {
                    fillColor: [41, 128, 185],
                    textColor: [255, 255, 255],
                    halign: 'center'
                },
                columnStyles: columnStyles,
                margin: { top: margin, bottom: margin, left: margin, right: margin },
                pageBreak: 'auto'
            });

            doc.save('sales_order_list.pdf');
        }

        function exportTableToExcel() {
            const rows = [];
            document.querySelectorAll('#order-table-body tr').forEach(row => {
                const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                rows.push(rowData);
            });

            const header = [['Sr','Order_Number', 'Po_Date','Customer_Name','Product_Code','Description','Quantity','Rate','Balance']];
            const data = header.concat(rows);

            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);

            const wscols = [
                {wch: 10},
                {wch: 20},
                {wch: 20},
                {wch: 60},
                {wch: 30},
                {wch: 40},
                {wch: 30},
                {wch: 30},
                {wch: 40},
            ];

            ws['!cols'] = wscols;

            XLSX.utils.book_append_sheet(wb, ws, 'Table Data');

            XLSX.writeFile(wb, 'sales_order_list.xlsx');
        }
</script>
      <script>
        $(document).ready(function() {
            var table = $('#salesOrderTable').DataTable({
                pageLength: 10
            });

            $('#entriesSelect').on('change', function() {
                var length = $(this).val();
                table.page.len(length).draw();
            });

            $('#viewAllEntries').on('click', function() {
                table.page.len(-1).draw();
            });
        });
    </script>
</div>
</div>


@endsection