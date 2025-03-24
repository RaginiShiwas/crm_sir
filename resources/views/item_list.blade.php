@extends('layouts.app')
@section('contant')

<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Item List</h2>
            </div>
        </div>
        
        <div id="orderTable" data-list='{"valueNames":["item_name","Product Code",
        "Our Code","Item Group","Item Class","Account Group","Item Location","edit"],"page":500,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                       
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                        </div>
                    </div>
                    <div class="col-auto">
          <button onclick="exportTableToExcel()" class="btn btn-primary">Export to Excel</button>

            <button class="btn btn-primary" onclick="exportTableToPDF()">Export to PDF</button>
            <a href="{{ url('/item') }}" class="btn btn-primary">Add Item</a>
            <button class="btn btn-primary" id="viewAllBtn">View All</button>
          </div>
        </div>
      </div>


            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table id="commodityTable" class="table table-sm fs--1 mb-0">
                        <thead>
                            <tr>
                            <th class="sort white-space-nowrap align-left pe-3" scope="col" data-sort="item_name">Item Name</th>
                <th class="sort align-left " scope="col" data-sort="Product Code">Product Code</th>
                <th class="sort align-left ps-8" scope="col" data-sort="Our Code">
                  Our Code</th>
                <th class="sort align-left pe-3" scope="col" data-sort="Item Group">
                  Item Group</th>
                <th class="sort align-left text-start pe-3" scope="col" data-sort="Item Class">Item Class</th>
                <th class="sort align-left text-start" scope="col" data-sort="Account Group">Account Group</th>
                <th class="sort align-left  pe-0" scope="col" data-sort="Item Location">Item Location</th>
                <th class="sort align-left  pe-0" scope="col" data-sort="Item Location">Edit</th>
                
               </thead>

                        <tbody class="list" id="order-table-body">
                        @foreach ($items as $item)
              <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                
                <td class="party_name align-left ">{{ $item->itemname }}</td>
                <td class="print_name align-left ">{{ $item->itemcode }}</td>
                <td class="party_code align-left ">  {{ $item->ourcode }}</td>
                <td class="under_group align-left">{{ $item->itemGroup ? $item->itemGroup->groupname : 'N/A' }}</td>
        <td class="address1 align-left">{{ $item->itemClass ? $item->itemClass->classname : 'N/A' }}</td>
        <td class="address2 align-left">{{ $item->accountGroup ? $item->accountGroup->groupname : 'N/A' }}</td>
                <td class="city align-left "> {{ $item->location }}</td>
               
            <td class="align-left ">
                    <a href="{{ route('edit_item', $item->id) }}" class="btn btn-sm btn-primary">
                      <i class="fas fa-edit"></i>
                   </a>
                </td>
              </tr>
              @endforeach
            
                        </tbody>
                    </table>
                </div>
                  
            </div>
        </div>
    </div>
</div>

<script>
function exportTableToPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
        orientation: 'landscape', // Landscape orientation to fit more columns
        unit: 'pt', // Points, the unit used by jsPDF
        format: 'A4' // A4 size
    });

    // Extracting data from the table
    const rows = [];
    document.querySelectorAll('#order-table-body tr').forEach(row => {
        const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
        rows.push(rowData);
    });

    // Define the number of columns
    const numColumns =7;
    // Calculate the equal width for each column to fit A4 landscape
    const pageWidth = doc.internal.pageSize.width;
    const pageHeight = doc.internal.pageSize.height;
    const margin = 40;
    const usableWidth = pageWidth - (2 * margin);
    const columnWidth = usableWidth / numColumns;

    // Define column widths equally
    const columnStyles = {};
    for (let i = 0; i < numColumns; i++) {
        columnStyles[i] = { cellWidth: columnWidth };
    }

    // Generate the table
    doc.autoTable({
        head: [['Product Name', 'Product Code', 'Our Code', 'Item Group', 'Item Class', 'Account Group', 'Item Location']],
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

    // Saving the generated PDF
    doc.save('item_list.pdf');
}
</script>
<script>
 function exportTableToExcel() {
            // Extracting data from the table
            const rows = [];
            document.querySelectorAll('#order-table-body tr').forEach(row => {
                const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
                rows.push(rowData);
            });

            // Adding the headers
            const header = [['Product Name', 'Product Code', 'Our Code', 'Item Group', 'Item Class', 'Account Group', 'Item Location']];
            const data = header.concat(rows);

            // Create a new workbook and a new worksheet
            const wb = XLSX.utils.book_new();
            const ws = XLSX.utils.aoa_to_sheet(data);

            // Adjust column widths
            const wscols = [
                {wch: 90}, // "wch" means "width in characters"
                {wch: 30},
                {wch: 20},
                {wch: 20},
                {wch: 40},
                {wch: 40},
                {wch: 20},
               
            ];

            ws['!cols'] = wscols;

            // Append the worksheet to the workbook
            XLSX.utils.book_append_sheet(wb, ws, 'Table Data');

            // Export the workbook to an Excel file
            XLSX.writeFile(wb, 'item_list.xlsx');
        }
    </script>
    

<script>
$(document).ready(function() {
    var table = $('#commodityTable').DataTable({
        pageLength: 10
    });

    $('#viewAllBtn').on('click', function() {
        table.page.len(-1).draw();
    });
});
</script>

@endsection
