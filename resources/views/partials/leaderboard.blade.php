<?php
    $Trending=[
        ['address'=> '0x74e4bd1a0e573836b8e89dea78dd37994c6aa55b808d980bb5674e0475763207' ,'InvitedBy'=> '0x45f9675804904a6d8116354bd9ba74cdbdbc88ca','points'=> '0'] ,
        ['address'=> '0x78c161e9e0a4f11ee1237a785c3796a5cb99644f786889e84493cbc0fba4664a' ,'InvitedBy'=> '0x5e395c998487d6447ab8242ed93abe89ec7d2a49','points'=> '0'] ,
        ['address'=> '0x97f6f1c0a80f8ee42edeca4ce0747c9980d7b10d966fcc8a33b592becbefa803' ,'InvitedBy'=> '0x54e7bd030ca09bf5562bd90da6e7f5f21f590bb1','points'=> '0'] ,
        ['address'=> '0xcc178418252256021e1fbbc1a077bb927c8a701cbdef14c9c476bad9027939fb' ,'InvitedBy'=> '0x45f9675804904a6d8116354bd9ba74cdbdbc88ca','points'=> '0'] ,
        ['address'=> '0xe1857782eb6cb9ce4a5a2748a655d7a7bf9557348a837ab4cfc8a6bfeaefd748' ,'InvitedBy'=> '0xee0dd14994db1000b003401cbe841d846b767f31','points'=> '0'] ,
        ['address'=> '0x7eabe93e2ac03bdb2559a1d9797b1e3ac2830619a3cdc61ee03b24e5fccb67b2' ,'InvitedBy'=> '0xee0dd14994db1000b003401cbe841d846b767f31','points'=> '0'] ,
        ['address'=> '0x11f1a5492a99171724366c5a5bb9e0f51be52934380585725e0c2249e3e0174b' ,'InvitedBy'=> '0x924cafec4f967be5df085ad94d8d50574f9a2bb0','points'=> '0'] ,
        ['address'=> '0x63153d79492a40f74aa38788f4d61c4fda36c16bf0fdc8189445d83145bd36c7' ,'InvitedBy'=> '0xf700876d2b9f5054727f56cefd0acc5276d48b16','points'=> '0'] ,
        ['address'=> '0xcb23f53483a7a52f415ce159fd548ae09789cc8906480614fe5c2261907ebd2a' ,'InvitedBy'=> '0x45f9675804904a6d8116354bd9ba74cdbdbc88ca','points'=> '0'] ,
    ]
?>
<div class="body">
  <div class="sc-fEOsli gfYKCb">
    <div class="sc-idiyUo fFdgIK">
      <div class="item checked">Trending Leaders</div>
      <div class="item">
        <div class="text">LP Leaders</div>
        <div class="hover-text">Coming soon</div>
      </div>
    </div>
    <div class="sc-bjUoiL iUwTfz">
      <div class="header">
        <div class="title">Trending Leaderboard</div>
      </div>
      <div class="desc">
        <span>You have </span>
        <span class="main-text">0</span>
        <span>trade and They helped you earn </span>
        <span class="main-text">0</span>
        <span> points.</span>
      </div>
      <div class="infinite-scroll-component__outerdiv">
        <div class="infinite-scroll-component sc-fLlhyt cQqFec">
          <table class="MuiTable-root MuiTable-stickyHeader sc-dIouRR bKrVdB css-lkld8c">
            <thead class="MuiTableHead-root sc-dmRaPn jjPGkh css-1wbz3t9">
              <tr class="MuiTableRow-root MuiTableRow-head sc-kgflAQ iZOiLQ css-1gqug66">
                <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-8coetn" scope="col">Rank</th>
                <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-8coetn" scope="col">Address</th>
                <th class="MuiTableCell-root MuiTableCell-head MuiTableCell-stickyHeader MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-8coetn" scope="col">Points</th>
              </tr>
            </thead>
            <tbody class="MuiTableBody-root css-1xnox0e">
              @foreach ($Trending as $index => $item)
                <tr class="MuiTableRow-root sc-kgflAQ iZOiLQ css-1gqug66">
                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-q34dxg"> <div class="label">{{ $index + 1 }}</div></td>
                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-q34dxg">
                        <a href="https://app.fuel.network/account/{{ $item['address'] }}" target="_blank" rel="noopener noreferrer">
                            {{ substr($item['address'], 0, 4) . "..." . substr($item['address'], -4) }}
                        </a>
                    </td>
                    <td class="MuiTableCell-root MuiTableCell-body MuiTableCell-sizeMedium sc-hHLeRK gzxPMc css-q34dxg">{{ $item['points'] ?? 'N/A' }}</td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="Toastify" id="toast"></div>
  <div class="Toastify" id="message"></div>
</div>
<img src="/images/template.c92560e2eeb468168b5d.png" class="template">