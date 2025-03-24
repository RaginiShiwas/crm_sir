@extends('layouts.app')
@section('contant')

<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Commodity List</h2>
            </div>
        </div>
        
        <div id="orderTable" data-list='{"valueNames":["commodity_name","commodity_code","edit"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search" type="search" placeholder="Search contacts" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button onclick="exportTableToExcel()" class="btn btn-primary">Export to Excel</button>
                        <button class="btn btn-primary" onclick="exportTableToPDF()">Export to PDF</button>
                        <a href="{{ url('/commodity') }}" class="btn btn-primary">Add Commodity</a>
                        <button class="btn btn-primary" id="viewAllBtn">View All</button>
                    </div>
                </div>
            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table id="commodityTable" class="table table-sm fs--1 mb-0 align-left">
                        <thead>
                            <tr>
                                <th class="sort white-space-nowrap  pe-3" scope="col" data-sort="commodity_name">Commodity Name</th>
                                <th class="sort " scope="col" data-sort="commodity_code">Commodity Code</th>
                                <th class="sort " scope="col" data-sort="edit">Edit</th>
                            </tr>
                        </thead>

                        <tbody class="list" id="order-table-body">
                            @foreach($commodities as $commodity)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="commodity_name align-left">{{ $commodity->commodity_name }}</td>
                                <td class="commodity_code align-left ">{{ $commodity->commodity_code }}</td>
                                <td class="align-left ">
                                    <a href="{{ route('commodity.edit', $commodity->id) }}" class="btn btn-sm btn-primary">
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
        orientation: 'landscape',
        unit: 'pt',
        format: 'A4'
    });

    const rows = [];
    document.querySelectorAll('#order-table-body tr').forEach(row => {
        const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
        rows.push(rowData);
    });

    const numColumns = 2;
    const pageWidth = doc.internal.pageSize.width;
    const margin = 40;
    const usableWidth = pageWidth - (2 * margin);
    const columnWidth = usableWidth / numColumns;

    const columnStyles = {};
    for (let i = 0; i < numColumns; i++) {
        columnStyles[i] = { cellWidth: columnWidth };
    }

    doc.autoTable({
        head: [['Commodity Name', 'Commodity Code']],
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

    doc.save('commodity_list.pdf');
}

function exportTableToExcel() {
    const rows = [];
    document.querySelectorAll('#order-table-body tr').forEach(row => {
        const rowData = Array.from(row.querySelectorAll('td')).map(cell => cell.innerText);
        rows.push(rowData);
    });

    const header = [['Commodity Name', 'Commodity Code']];
    const data = header.concat(rows);

    const wb = XLSX.utils.book_new();
    const ws = XLSX.utils.aoa_to_sheet(data);

    const wscols = [
        { wch: 40 },
        { wch: 40 }
    ];

    ws['!cols'] = wscols;

    XLSX.utils.book_append_sheet(wb, ws, 'Table Data');

    XLSX.writeFile(wb, 'commodity_list.xlsx');
}

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
