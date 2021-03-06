<?php
  $pagename = 'Basic Yi Keyboard Help';
  $pagetitle = 'Basic Yi Keyboard Help';
  $pagestyle = <<<END
  table.inputSequences {  border: 1px solid #1C6EA4;  background-color: #FFFFFF; text-align: left;  border-collapse: collapse;}
  table.inputSequences td, table.inputSequences th {  border: 1px solid #FFFFFF;  padding: 3px 6px;  text-align:center;}
  table.inputSequences tr:nth-child(even) {  background: #D0E4F5;}
  table.inputSequences thead th {  font-weight: bold; }
  table.inputSequences thead th:first-child {  border-left: none;}
  table.inputSequences tfoot td {  font-size: 14px;}
  table.inputSequences tfoot .links {  text-align: right;}
  table.inputSequences tfoot .links a{  display: inline-block;  background: #1C6EA4;  color: #FFFFFF;  padding: 2px 8px;  border-radius: 5px;}
  table.inputSequences tr td.glyph {font-size: 1.7rem;}
  table+table {margin-top: 3.0rem;}
  .important {text-align: center;font-size: 1.2rem;background-color: #D0E4F5;padding-top:1.2rem;padding-bottom:1.2rem;max-width:850px;margin-left:auto;margin-right: auto; }
  .centered {text-align: center; }
  p.centered+table {margin-top:2.0rem; }
  .glyph.yi {font-family:'Microsoft Yi Baiti', 'Noto Sans Yi', NSimSun-18030, SimSun-18030, 'SIL Yi', Code2000; }
  table {table-layout: fixed; }
  td:first-child, th:first-child {position:sticky;left:0;z-index:1;background-color:black;color: white; }
  thead tr th {position:sticky;top:0;background-color: black;color: white;}
  th:first-child, th:last-child {z-index:2; /*background-color:red; */}
END;
  require_once('header.php');
?>







<h2>Typing Yi syllabes</h2>
<p class="important">To type a Yi syllable, type the pinyin romanization for that
syllable, followed by a space.</p>
<table class="inputSequences" id="yiTable">
    <thead>
         <tr>
            <th>&nbsp;</th>
            <th>-</th>
            <th>b</th>
            <th>p</th>
            <th>bb</th>
            <th>nb</th>
            <th>hm</th>
            <th>m</th>
            <th>f</th>
            <th>v</th>
            <th>d</th>
            <th>t</th>
            <th>dd</th>
            <th>nd</th>
            <th>hn</th>
            <th>n</th>
            <th>hl</th>
            <th>l</th>
            <th>g</th>
            <th>k</th>
            <th>gg</th>
            <th>mg</th>
            <th>hx</th>
            <th>ng</th>
            <th>h</th>
            <th>w</th>
            <th>z</th>
            <th>c</th>
            <th>zz</th>
            <th>nz</th>
            <th>s</th>
            <th>ss</th>
            <th>zh</th>
            <th>ch</th>
            <th>rr</th>
            <th>nr</th>
            <th>sh</th>
            <th>r</th>
            <th>j</th>
            <th>q</th>
            <th>jj</th>
            <th>nj</th>
            <th>ny</th>
            <th>x</th>
            <th>y</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="rowHeader">it</th>
            <td class="glyph yi" title="U+A000: YI SYLLABLE IT">???</td>
            <td class="glyph yi" title="U+A016: YI SYLLABLE BIT">???</td>
            <td class="glyph yi" title="U+A038: YI SYLLABLE PIT">???</td>
            <td class="glyph yi" title="U+A056: YI SYLLABLE BBIT">???</td>
            <td class="glyph yi" title="U+A076: YI SYLLABLE NBIT">???</td>
            <td class="glyph yi" title="U+A091: YI SYLLABLE HMIT">???</td>
            <td class="glyph yi" title="U+A0AE: YI SYLLABLE MIT">???</td>
            <td class="glyph yi" title="U+A0CD: YI SYLLABLE FIT">???</td>
            <td class="glyph yi" title="U+A0E2: YI SYLLABLE VIT">???</td>
            <td class="glyph yi" title="U+A100: YI SYLLABLE DIT">???</td>
            <td class="glyph yi" title="U+A11A: YI SYLLABLE TIT">???</td>
            <td class="glyph yi" title="U+A136: YI SYLLABLE DDIT">???</td>
            <td class="glyph yi" title="U+A151: YI SYLLABLE NDIT">???</td>
            <td class="glyph yi" title="U+A168: YI SYLLABLE HNIT">???</td>
            <td class="glyph yi" title="U+A17D: YI SYLLABLE NIT">???</td>
            <td class="glyph yi" title="U+A197: YI SYLLABLE HLIT">???</td>
            <td class="glyph yi" title="U+A1B7: YI SYLLABLE LIT">???</td>
            <td class="glyph yi" title="U+A1DA: YI SYLLABLE GIT">???</td>
            <td class="glyph yi" title="U+A1F8: YI SYLLABLE KIT">???</td>
            <td class="glyph yi" title="U+A214: YI SYLLABLE GGIT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A246: YI SYLLABLE HXIT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A26E: YI SYLLABLE HIT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28D: YI SYLLABLE ZIT">???</td>
            <td class="glyph yi" title="U+A2AE: YI SYLLABLE CIT">???</td>
            <td class="glyph yi" title="U+A2D0: YI SYLLABLE ZZIT">???</td>
            <td class="glyph yi" title="U+A2ED: YI SYLLABLE NZIT">???</td>
            <td class="glyph yi" title="U+A309: YI SYLLABLE SIT">???</td>
            <td class="glyph yi" title="U+A32A: YI SYLLABLE SSIT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E0: YI SYLLABLE JIT">???</td>
            <td class="glyph yi" title="U+A3FC: YI SYLLABLE QIT">???</td>
            <td class="glyph yi" title="U+A418: YI SYLLABLE JJIT">???</td>
            <td class="glyph yi" title="U+A431: YI SYLLABLE NJIT">???</td>
            <td class="glyph yi" title="U+A44A: YI SYLLABLE NYIT">???</td>
            <td class="glyph yi" title="U+A45D: YI SYLLABLE XIT">???</td>
            <td class="glyph yi" title="U+A471: YI SYLLABLE YIT">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ix</th>
            <td class="glyph yi" title="U+A001: YI SYLLABLE IX">???</td>
            <td class="glyph yi" title="U+A017: YI SYLLABLE BIX">???</td>
            <td class="glyph yi" title="U+A039: YI SYLLABLE PIX">???</td>
            <td class="glyph yi" title="U+A057: YI SYLLABLE BBIX">???</td>
            <td class="glyph yi" title="U+A077: YI SYLLABLE NBIX">???</td>
            <td class="glyph yi" title="U+A092: YI SYLLABLE HMIX">???</td>
            <td class="glyph yi" title="U+A0AF: YI SYLLABLE MIX">???</td>
            <td class="glyph yi" title="U+A0CE: YI SYLLABLE FIX">???</td>
            <td class="glyph yi" title="U+A0E3: YI SYLLABLE VIX">???</td>
            <td class="glyph yi" title="U+A101: YI SYLLABLE DIX">???</td>
            <td class="glyph yi" title="U+A11B: YI SYLLABLE TIX">???</td>
            <td class="glyph yi" title="U+A137: YI SYLLABLE DDIX">???</td>
            <td class="glyph yi" title="U+A152: YI SYLLABLE NDIX">???</td>
            <td class="glyph yi" title="U+A169: YI SYLLABLE HNIX">???</td>
            <td class="glyph yi" title="U+A17E: YI SYLLABLE NIX">???</td>
            <td class="glyph yi" title="U+A198: YI SYLLABLE HLIX">???</td>
            <td class="glyph yi" title="U+A1B8: YI SYLLABLE LIX">???</td>
            <td class="glyph yi" title="U+A1DB: YI SYLLABLE GIX">???</td>
            <td class="glyph yi" title="U+A1F9: YI SYLLABLE KIX">???</td>
            <td class="glyph yi" title="U+A215: YI SYLLABLE GGIX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A247: YI SYLLABLE HXIX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28E: YI SYLLABLE ZIX">???</td>
            <td class="glyph yi" title="U+A2AF: YI SYLLABLE CIX">???</td>
            <td class="glyph yi" title="U+A2D1: YI SYLLABLE ZZIX">???</td>
            <td class="glyph yi" title="U+A2EE: YI SYLLABLE NZIX">???</td>
            <td class="glyph yi" title="U+A30A: YI SYLLABLE SIX">???</td>
            <td class="glyph yi" title="U+A32B: YI SYLLABLE SSIX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E1: YI SYLLABLE JIX">???</td>
            <td class="glyph yi" title="U+A3FD: YI SYLLABLE QIX">???</td>
            <td class="glyph yi" title="U+A419: YI SYLLABLE JJIX">???</td>
            <td class="glyph yi" title="U+A432: YI SYLLABLE NJIX">???</td>
            <td class="glyph yi" title="U+A44B: YI SYLLABLE NYIX">???</td>
            <td class="glyph yi" title="U+A45E: YI SYLLABLE XIX">???</td>
            <td class="glyph yi" title="U+A472: YI SYLLABLE YIX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">i</th>
            <td class="glyph yi" title="U+A002: YI SYLLABLE I">???</td>
            <td class="glyph yi" title="U+A018: YI SYLLABLE BI">???</td>
            <td class="glyph yi" title="U+A03A: YI SYLLABLE PI">???</td>
            <td class="glyph yi" title="U+A058: YI SYLLABLE BBI">???</td>
            <td class="glyph yi" title="U+A078: YI SYLLABLE NBI">???</td>
            <td class="glyph yi" title="U+A093: YI SYLLABLE HMI">???</td>
            <td class="glyph yi" title="U+A0B0: YI SYLLABLE MI">???</td>
            <td class="glyph yi" title="U+A0CF: YI SYLLABLE FI">???</td>
            <td class="glyph yi" title="U+A0E4: YI SYLLABLE VI">???</td>
            <td class="glyph yi" title="U+A102: YI SYLLABLE DI">???</td>
            <td class="glyph yi" title="U+A11C: YI SYLLABLE TI">???</td>
            <td class="glyph yi" title="U+A138: YI SYLLABLE DDI">???</td>
            <td class="glyph yi" title="U+A153: YI SYLLABLE NDI">???</td>
            <td class="glyph yi" title="U+A16A: YI SYLLABLE HNI">???</td>
            <td class="glyph yi" title="U+A17F: YI SYLLABLE NI">???</td>
            <td class="glyph yi" title="U+A199: YI SYLLABLE HLI">???</td>
            <td class="glyph yi" title="U+A1B9: YI SYLLABLE LI">???</td>
            <td class="glyph yi" title="U+A1DC: YI SYLLABLE GI">???</td>
            <td class="glyph yi" title="U+A1FA: YI SYLLABLE KI">???</td>
            <td class="glyph yi" title="U+A216: YI SYLLABLE GGI">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A248: YI SYLLABLE HXI">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A28F: YI SYLLABLE ZI">???</td>
            <td class="glyph yi" title="U+A2B0: YI SYLLABLE CI">???</td>
            <td class="glyph yi" title="U+A2D2: YI SYLLABLE ZZI">???</td>
            <td class="glyph yi" title="U+A2EF: YI SYLLABLE NZI">???</td>
            <td class="glyph yi" title="U+A30B: YI SYLLABLE SI">???</td>
            <td class="glyph yi" title="U+A32C: YI SYLLABLE SSI">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E2: YI SYLLABLE JI">???</td>
            <td class="glyph yi" title="U+A3FE: YI SYLLABLE QI">???</td>
            <td class="glyph yi" title="U+A41A: YI SYLLABLE JJI">???</td>
            <td class="glyph yi" title="U+A433: YI SYLLABLE NJI">???</td>
            <td class="glyph yi" title="U+A44C: YI SYLLABLE NYI">???</td>
            <td class="glyph yi" title="U+A45F: YI SYLLABLE XI">???</td>
            <td class="glyph yi" title="U+A473: YI SYLLABLE YI">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ip</th>
            <td class="glyph yi" title="U+A003: YI SYLLABLE IP">???</td>
            <td class="glyph yi" title="U+A019: YI SYLLABLE BIP">???</td>
            <td class="glyph yi" title="U+A03B: YI SYLLABLE PIP">???</td>
            <td class="glyph yi" title="U+A059: YI SYLLABLE BBIP">???</td>
            <td class="glyph yi" title="U+A079: YI SYLLABLE NBIP">???</td>
            <td class="glyph yi" title="U+A094: YI SYLLABLE HMIP">???</td>
            <td class="glyph yi" title="U+A0B1: YI SYLLABLE MIP">???</td>
            <td class="glyph yi" title="U+A0D0: YI SYLLABLE FIP">???</td>
            <td class="glyph yi" title="U+A0E5: YI SYLLABLE VIP">???</td>
            <td class="glyph yi" title="U+A103: YI SYLLABLE DIP">???</td>
            <td class="glyph yi" title="U+A11D: YI SYLLABLE TIP">???</td>
            <td class="glyph yi" title="U+A139: YI SYLLABLE DDIP">???</td>
            <td class="glyph yi" title="U+A154: YI SYLLABLE NDIP">???</td>
            <td class="glyph yi" title="U+A16B: YI SYLLABLE HNIP">???</td>
            <td class="glyph yi" title="U+A180: YI SYLLABLE NIP">???</td>
            <td class="glyph yi" title="U+A19A: YI SYLLABLE HLIP">???</td>
            <td class="glyph yi" title="U+A1BA: YI SYLLABLE LIP">???</td>
            <td class="glyph yi" title="U+A1DD: YI SYLLABLE GIP">???</td>
            <td class="glyph yi" title="U+A1FB: YI SYLLABLE KIP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A249: YI SYLLABLE HXIP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A290: YI SYLLABLE ZIP">???</td>
            <td class="glyph yi" title="U+A2B1: YI SYLLABLE CIP">???</td>
            <td class="glyph yi" title="U+A2D3: YI SYLLABLE ZZIP">???</td>
            <td class="glyph yi" title="U+A2F0: YI SYLLABLE NZIP">???</td>
            <td class="glyph yi" title="U+A30C: YI SYLLABLE SIP">???</td>
            <td class="glyph yi" title="U+A32D: YI SYLLABLE SSIP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E3: YI SYLLABLE JIP">???</td>
            <td class="glyph yi" title="U+A3FF: YI SYLLABLE QIP">???</td>
            <td class="glyph yi" title="U+A41B: YI SYLLABLE JJIP">???</td>
            <td class="glyph yi" title="U+A434: YI SYLLABLE NJIP">???</td>
            <td class="glyph yi" title="U+A44D: YI SYLLABLE NYIP">???</td>
            <td class="glyph yi" title="U+A460: YI SYLLABLE XIP">???</td>
            <td class="glyph yi" title="U+A474: YI SYLLABLE YIP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">iet</th>
            <td class="glyph yi" title="U+A004: YI SYLLABLE IET">???</td>
            <td class="glyph yi" title="U+A01A: YI SYLLABLE BIET">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A05A: YI SYLLABLE BBIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E6: YI SYLLABLE VIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A16C: YI SYLLABLE HNIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1BB: YI SYLLABLE LIET">???</td>
            <td class="glyph yi" title="U+A1DE: YI SYLLABLE GIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A24A: YI SYLLABLE HXIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2B2: YI SYLLABLE CIET">???</td>
            <td class="glyph yi" title="U+A2D4: YI SYLLABLE ZZIET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E4: YI SYLLABLE JIET">???</td>
            <td class="glyph yi" title="U+A400: YI SYLLABLE QIET">???</td>
            <td class="glyph yi" title="U+A41C: YI SYLLABLE JJIET">???</td>
            <td class="glyph yi" title="U+A435: YI SYLLABLE NJIET">???</td>
            <td class="glyph yi" title="U+A44E: YI SYLLABLE NYIET">???</td>
            <td class="glyph yi" title="U+A461: YI SYLLABLE XIET">???</td>
            <td class="glyph yi" title="U+A475: YI SYLLABLE YIET">???</td>
        </tr>
        <tr>
            <th class="rowHeader">iex</th>
            <td class="glyph yi" title="U+A005: YI SYLLABLE IEX">???</td>
            <td class="glyph yi" title="U+A01B: YI SYLLABLE BIEX">???</td>
            <td class="glyph yi" title="U+A03C: YI SYLLABLE PIEX">???</td>
            <td class="glyph yi" title="U+A05B: YI SYLLABLE BBIEX">???</td>
            <td class="glyph yi" title="U+A07A: YI SYLLABLE NBIEX">???</td>
            <td class="glyph yi" title="U+A095: YI SYLLABLE HMIEX">???</td>
            <td class="glyph yi" title="U+A0B2: YI SYLLABLE MIEX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E7: YI SYLLABLE VIEX">???</td>
            <td class="glyph yi" title="U+A104: YI SYLLABLE DIEX">???</td>
            <td class="glyph yi" title="U+A11E: YI SYLLABLE TIEX">???</td>
            <td class="glyph yi" title="U+A13A: YI SYLLABLE DDIEX">???</td>
            <td class="glyph yi" title="U+A155: YI SYLLABLE NDIEX">???</td>
            <td class="glyph yi" title="U+A16D: YI SYLLABLE HNIEX">???</td>
            <td class="glyph yi" title="U+A181: YI SYLLABLE NIEX">???</td>
            <td class="glyph yi" title="U+A19B: YI SYLLABLE HLIEX">???</td>
            <td class="glyph yi" title="U+A1BC: YI SYLLABLE LIEX">???</td>
            <td class="glyph yi" title="U+A1DF: YI SYLLABLE GIEX">???</td>
            <td class="glyph yi" title="U+A1FC: YI SYLLABLE KIEX">???</td>
            <td class="glyph yi" title="U+A217: YI SYLLABLE GGIEX">???</td>
            <td class="glyph yi" title="U+A230: YI SYLLABLE MGIEX">???</td>
            <td class="glyph yi" title="U+A24B: YI SYLLABLE HXIEX">???</td>
            <td class="glyph yi" title="U+A25D: YI SYLLABLE NGIEX">???</td>
            <td class="glyph yi" title="U+A26F: YI SYLLABLE HIEX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A291: YI SYLLABLE ZIEX">???</td>
            <td class="glyph yi" title="U+A2B3: YI SYLLABLE CIEX">???</td>
            <td class="glyph yi" title="U+A2D5: YI SYLLABLE ZZIEX">???</td>
            <td class="glyph yi" title="U+A2F1: YI SYLLABLE NZIEX">???</td>
            <td class="glyph yi" title="U+A30D: YI SYLLABLE SIEX">???</td>
            <td class="glyph yi" title="U+A32E: YI SYLLABLE SSIEX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E5: YI SYLLABLE JIEX">???</td>
            <td class="glyph yi" title="U+A401: YI SYLLABLE QIEX">???</td>
            <td class="glyph yi" title="U+A41D: YI SYLLABLE JJIEX">???</td>
            <td class="glyph yi" title="U+A436: YI SYLLABLE NJIEX">???</td>
            <td class="glyph yi" title="U+A44F: YI SYLLABLE NYIEX">???</td>
            <td class="glyph yi" title="U+A462: YI SYLLABLE XIEX">???</td>
            <td class="glyph yi" title="U+A476: YI SYLLABLE YIEX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ie</th>
            <td class="glyph yi" title="U+A006: YI SYLLABLE IE">???</td>
            <td class="glyph yi" title="U+A01C: YI SYLLABLE BIE">???</td>
            <td class="glyph yi" title="U+A03D: YI SYLLABLE PIE">???</td>
            <td class="glyph yi" title="U+A05C: YI SYLLABLE BBIE">???</td>
            <td class="glyph yi" title="U+A07B: YI SYLLABLE NBIE">???</td>
            <td class="glyph yi" title="U+A096: YI SYLLABLE HMIE">???</td>
            <td class="glyph yi" title="U+A0B3: YI SYLLABLE MIE">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E8: YI SYLLABLE VIE">???</td>
            <td class="glyph yi" title="U+A105: YI SYLLABLE DIE">???</td>
            <td class="glyph yi" title="U+A11F: YI SYLLABLE TIE">???</td>
            <td class="glyph yi" title="U+A13B: YI SYLLABLE DDIE">???</td>
            <td class="glyph yi" title="U+A156: YI SYLLABLE NDIE">???</td>
            <td class="glyph yi" title="U+A16E: YI SYLLABLE HNIE">???</td>
            <td class="glyph yi" title="U+A182: YI SYLLABLE NIE">???</td>
            <td class="glyph yi" title="U+A19C: YI SYLLABLE HLIE">???</td>
            <td class="glyph yi" title="U+A1BD: YI SYLLABLE LIE">???</td>
            <td class="glyph yi" title="U+A1E0: YI SYLLABLE GIE">???</td>
            <td class="glyph yi" title="U+A1FD: YI SYLLABLE KIE">???</td>
            <td class="glyph yi" title="U+A218: YI SYLLABLE GGIE">???</td>
            <td class="glyph yi" title="U+A231: YI SYLLABLE MGIE">???</td>
            <td class="glyph yi" title="U+A24C: YI SYLLABLE HXIE">???</td>
            <td class="glyph yi" title="U+A25E: YI SYLLABLE NGIE">???</td>
            <td class="glyph yi" title="U+A270: YI SYLLABLE HIE">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A292: YI SYLLABLE ZIE">???</td>
            <td class="glyph yi" title="U+A2B4: YI SYLLABLE CIE">???</td>
            <td class="glyph yi" title="U+A2D6: YI SYLLABLE ZZIE">???</td>
            <td class="glyph yi" title="U+A2F2: YI SYLLABLE NZIE">???</td>
            <td class="glyph yi" title="U+A30E: YI SYLLABLE SIE">???</td>
            <td class="glyph yi" title="U+A32F: YI SYLLABLE SSIE">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E6: YI SYLLABLE JIE">???</td>
            <td class="glyph yi" title="U+A402: YI SYLLABLE QIE">???</td>
            <td class="glyph yi" title="U+A41E: YI SYLLABLE JJIE">???</td>
            <td class="glyph yi" title="U+A437: YI SYLLABLE NJIE">???</td>
            <td class="glyph yi" title="U+A450: YI SYLLABLE NYIE">???</td>
            <td class="glyph yi" title="U+A463: YI SYLLABLE XIE">???</td>
            <td class="glyph yi" title="U+A477: YI SYLLABLE YIE">???</td>
        </tr>
        <tr>
            <th class="rowHeader">iep</th>
            <td class="glyph yi" title="U+A007: YI SYLLABLE IEP">???</td>
            <td class="glyph yi" title="U+A01D: YI SYLLABLE BIEP">???</td>
            <td class="glyph yi" title="U+A03E: YI SYLLABLE PIEP">???</td>
            <td class="glyph yi" title="U+A05D: YI SYLLABLE BBIEP">???</td>
            <td class="glyph yi" title="U+A07C: YI SYLLABLE NBIEP">???</td>
            <td class="glyph yi" title="U+A097: YI SYLLABLE HMIEP">???</td>
            <td class="glyph yi" title="U+A0B4: YI SYLLABLE MIEP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0E9: YI SYLLABLE VIEP">???</td>
            <td class="glyph yi" title="U+A106: YI SYLLABLE DIEP">???</td>
            <td class="glyph yi" title="U+A120: YI SYLLABLE TIEP">???</td>
            <td class="glyph yi" title="U+A13C: YI SYLLABLE DDIEP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A16F: YI SYLLABLE HNIEP">???</td>
            <td class="glyph yi" title="U+A183: YI SYLLABLE NIEP">???</td>
            <td class="glyph yi" title="U+A19D: YI SYLLABLE HLIEP">???</td>
            <td class="glyph yi" title="U+A1BE: YI SYLLABLE LIEP">???</td>
            <td class="glyph yi" title="U+A1E1: YI SYLLABLE GIEP">???</td>
            <td class="glyph yi" title="U+A1FE: YI SYLLABLE KIEP">???</td>
            <td class="glyph yi" title="U+A219: YI SYLLABLE GGIEP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A24D: YI SYLLABLE HXIEP">???</td>
            <td class="glyph yi" title="U+A25F: YI SYLLABLE NGIEP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A293: YI SYLLABLE ZIEP">???</td>
            <td class="glyph yi" title="U+A2B5: YI SYLLABLE CIEP">???</td>
            <td class="glyph yi" title="U+A2D7: YI SYLLABLE ZZIEP">???</td>
            <td class="glyph yi" title="U+A2F3: YI SYLLABLE NZIEP">???</td>
            <td class="glyph yi" title="U+A30F: YI SYLLABLE SIEP">???</td>
            <td class="glyph yi" title="U+A330: YI SYLLABLE SSIEP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E7: YI SYLLABLE JIEP">???</td>
            <td class="glyph yi" title="U+A403: YI SYLLABLE QIEP">???</td>
            <td class="glyph yi" title="U+A41F: YI SYLLABLE JJIEP">???</td>
            <td class="glyph yi" title="U+A438: YI SYLLABLE NJIEP">???</td>
            <td class="glyph yi" title="U+A451: YI SYLLABLE NYIEP">???</td>
            <td class="glyph yi" title="U+A464: YI SYLLABLE XIEP">???</td>
            <td class="glyph yi" title="U+A478: YI SYLLABLE YIEP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">at</th>
            <td class="glyph yi" title="U+A008: YI SYLLABLE AT">???</td>
            <td class="glyph yi" title="U+A01E: YI SYLLABLE BAT">???</td>
            <td class="glyph yi" title="U+A03F: YI SYLLABLE PAT">???</td>
            <td class="glyph yi" title="U+A05E: YI SYLLABLE BBAT">???</td>
            <td class="glyph yi" title="U+A07D: YI SYLLABLE NBAT">???</td>
            <td class="glyph yi" title="U+A098: YI SYLLABLE HMAT">???</td>
            <td class="glyph yi" title="U+A0B5: YI SYLLABLE MAT">???</td>
            <td class="glyph yi" title="U+A0D1: YI SYLLABLE FAT">???</td>
            <td class="glyph yi" title="U+A0EA: YI SYLLABLE VAT">???</td>
            <td class="glyph yi" title="U+A107: YI SYLLABLE DAT">???</td>
            <td class="glyph yi" title="U+A121: YI SYLLABLE TAT">???</td>
            <td class="glyph yi" title="U+A13D: YI SYLLABLE DDAT">???</td>
            <td class="glyph yi" title="U+A157: YI SYLLABLE NDAT">???</td>
            <td class="glyph yi" title="U+A170: YI SYLLABLE HNAT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A19E: YI SYLLABLE HLAT">???</td>
            <td class="glyph yi" title="U+A1BF: YI SYLLABLE LAT">???</td>
            <td class="glyph yi" title="U+A1E2: YI SYLLABLE GAT">???</td>
            <td class="glyph yi" title="U+A1FF: YI SYLLABLE KAT">???</td>
            <td class="glyph yi" title="U+A21A: YI SYLLABLE GGAT">???</td>
            <td class="glyph yi" title="U+A232: YI SYLLABLE MGAT">???</td>
            <td class="glyph yi" title="U+A24E: YI SYLLABLE HXAT">???</td>
            <td class="glyph yi" title="U+A260: YI SYLLABLE NGAT">???</td>
            <td class="glyph yi" title="U+A271: YI SYLLABLE HAT">???</td>
            <td class="glyph yi" title="U+A280: YI SYLLABLE WAT">???</td>
            <td class="glyph yi" title="U+A294: YI SYLLABLE ZAT">???</td>
            <td class="glyph yi" title="U+A2B6: YI SYLLABLE CAT">???</td>
            <td class="glyph yi" title="U+A2D8: YI SYLLABLE ZZAT">???</td>
            <td class="glyph yi" title="U+A2F4: YI SYLLABLE NZAT">???</td>
            <td class="glyph yi" title="U+A310: YI SYLLABLE SAT">???</td>
            <td class="glyph yi" title="U+A331: YI SYLLABLE SSAT">???</td>
            <td class="glyph yi" title="U+A346: YI SYLLABLE ZHAT">???</td>
            <td class="glyph yi" title="U+A361: YI SYLLABLE CHAT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A394: YI SYLLABLE NRAT">???</td>
            <td class="glyph yi" title="U+A3AB: YI SYLLABLE SHAT">???</td>
            <td class="glyph yi" title="U+A3C6: YI SYLLABLE RAT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ax</th>
            <td class="glyph yi" title="U+A009: YI SYLLABLE AX">???</td>
            <td class="glyph yi" title="U+A01F: YI SYLLABLE BAX">???</td>
            <td class="glyph yi" title="U+A040: YI SYLLABLE PAX">???</td>
            <td class="glyph yi" title="U+A05F: YI SYLLABLE BBAX">???</td>
            <td class="glyph yi" title="U+A07E: YI SYLLABLE NBAX">???</td>
            <td class="glyph yi" title="U+A099: YI SYLLABLE HMAX">???</td>
            <td class="glyph yi" title="U+A0B6: YI SYLLABLE MAX">???</td>
            <td class="glyph yi" title="U+A0D2: YI SYLLABLE FAX">???</td>
            <td class="glyph yi" title="U+A0EB: YI SYLLABLE VAX">???</td>
            <td class="glyph yi" title="U+A108: YI SYLLABLE DAX">???</td>
            <td class="glyph yi" title="U+A122: YI SYLLABLE TAX">???</td>
            <td class="glyph yi" title="U+A13E: YI SYLLABLE DDAX">???</td>
            <td class="glyph yi" title="U+A158: YI SYLLABLE NDAX">???</td>
            <td class="glyph yi" title="U+A171: YI SYLLABLE HNAX">???</td>
            <td class="glyph yi" title="U+A184: YI SYLLABLE NAX">???</td>
            <td class="glyph yi" title="U+A19F: YI SYLLABLE HLAX">???</td>
            <td class="glyph yi" title="U+A1C0: YI SYLLABLE LAX">???</td>
            <td class="glyph yi" title="U+A1E3: YI SYLLABLE GAX">???</td>
            <td class="glyph yi" title="U+A200: YI SYLLABLE KAX">???</td>
            <td class="glyph yi" title="U+A21B: YI SYLLABLE GGAX">???</td>
            <td class="glyph yi" title="U+A233: YI SYLLABLE MGAX">???</td>
            <td class="glyph yi" title="U+A24F: YI SYLLABLE HXAX">???</td>
            <td class="glyph yi" title="U+A261: YI SYLLABLE NGAX">???</td>
            <td class="glyph yi" title="U+A272: YI SYLLABLE HAX">???</td>
            <td class="glyph yi" title="U+A281: YI SYLLABLE WAX">???</td>
            <td class="glyph yi" title="U+A295: YI SYLLABLE ZAX">???</td>
            <td class="glyph yi" title="U+A2B7: YI SYLLABLE CAX">???</td>
            <td class="glyph yi" title="U+A2D9: YI SYLLABLE ZZAX">???</td>
            <td class="glyph yi" title="U+A2F5: YI SYLLABLE NZAX">???</td>
            <td class="glyph yi" title="U+A311: YI SYLLABLE SAX">???</td>
            <td class="glyph yi" title="U+A332: YI SYLLABLE SSAX">???</td>
            <td class="glyph yi" title="U+A347: YI SYLLABLE ZHAX">???</td>
            <td class="glyph yi" title="U+A362: YI SYLLABLE CHAX">???</td>
            <td class="glyph yi" title="U+A37C: YI SYLLABLE RRAX">???</td>
            <td class="glyph yi" title="U+A395: YI SYLLABLE NRAX">???</td>
            <td class="glyph yi" title="U+A3AC: YI SYLLABLE SHAX">???</td>
            <td class="glyph yi" title="U+A3C7: YI SYLLABLE RAX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">a</th>
            <td class="glyph yi" title="U+A00A: YI SYLLABLE A">???</td>
            <td class="glyph yi" title="U+A020: YI SYLLABLE BA">???</td>
            <td class="glyph yi" title="U+A041: YI SYLLABLE PA">???</td>
            <td class="glyph yi" title="U+A060: YI SYLLABLE BBA">???</td>
            <td class="glyph yi" title="U+A07F: YI SYLLABLE NBA">???</td>
            <td class="glyph yi" title="U+A09A: YI SYLLABLE HMA">???</td>
            <td class="glyph yi" title="U+A0B7: YI SYLLABLE MA">???</td>
            <td class="glyph yi" title="U+A0D3: YI SYLLABLE FA">???</td>
            <td class="glyph yi" title="U+A0EC: YI SYLLABLE VA">???</td>
            <td class="glyph yi" title="U+A109: YI SYLLABLE DA">???</td>
            <td class="glyph yi" title="U+A123: YI SYLLABLE TA">???</td>
            <td class="glyph yi" title="U+A13F: YI SYLLABLE DDA">???</td>
            <td class="glyph yi" title="U+A159: YI SYLLABLE NDA">???</td>
            <td class="glyph yi" title="U+A172: YI SYLLABLE HNA">???</td>
            <td class="glyph yi" title="U+A185: YI SYLLABLE NA">???</td>
            <td class="glyph yi" title="U+A1A0: YI SYLLABLE HLA">???</td>
            <td class="glyph yi" title="U+A1C1: YI SYLLABLE LA">???</td>
            <td class="glyph yi" title="U+A1E4: YI SYLLABLE GA">???</td>
            <td class="glyph yi" title="U+A201: YI SYLLABLE KA">???</td>
            <td class="glyph yi" title="U+A21C: YI SYLLABLE GGA">???</td>
            <td class="glyph yi" title="U+A234: YI SYLLABLE MGA">???</td>
            <td class="glyph yi" title="U+A250: YI SYLLABLE HXA">???</td>
            <td class="glyph yi" title="U+A262: YI SYLLABLE NGA">???</td>
            <td class="glyph yi" title="U+A273: YI SYLLABLE HA">???</td>
            <td class="glyph yi" title="U+A282: YI SYLLABLE WA">???</td>
            <td class="glyph yi" title="U+A296: YI SYLLABLE ZA">???</td>
            <td class="glyph yi" title="U+A2B8: YI SYLLABLE CA">???</td>
            <td class="glyph yi" title="U+A2DA: YI SYLLABLE ZZA">???</td>
            <td class="glyph yi" title="U+A2F6: YI SYLLABLE NZA">???</td>
            <td class="glyph yi" title="U+A312: YI SYLLABLE SA">???</td>
            <td class="glyph yi" title="U+A333: YI SYLLABLE SSA">???</td>
            <td class="glyph yi" title="U+A348: YI SYLLABLE ZHA">???</td>
            <td class="glyph yi" title="U+A363: YI SYLLABLE CHA">???</td>
            <td class="glyph yi" title="U+A37D: YI SYLLABLE RRA">???</td>
            <td class="glyph yi" title="U+A396: YI SYLLABLE NRA">???</td>
            <td class="glyph yi" title="U+A3AD: YI SYLLABLE SHA">???</td>
            <td class="glyph yi" title="U+A3C8: YI SYLLABLE RA">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ap</th>
            <td class="glyph yi" title="U+A00B: YI SYLLABLE AP">???</td>
            <td class="glyph yi" title="U+A021: YI SYLLABLE BAP">???</td>
            <td class="glyph yi" title="U+A042: YI SYLLABLE PAP">???</td>
            <td class="glyph yi" title="U+A061: YI SYLLABLE BBAP">???</td>
            <td class="glyph yi" title="U+A080: YI SYLLABLE NBAP">???</td>
            <td class="glyph yi" title="U+A09B: YI SYLLABLE HMAP">???</td>
            <td class="glyph yi" title="U+A0B8: YI SYLLABLE MAP">???</td>
            <td class="glyph yi" title="U+A0D4: YI SYLLABLE FAP">???</td>
            <td class="glyph yi" title="U+A0ED: YI SYLLABLE VAP">???</td>
            <td class="glyph yi" title="U+A10A: YI SYLLABLE DAP">???</td>
            <td class="glyph yi" title="U+A124: YI SYLLABLE TAP">???</td>
            <td class="glyph yi" title="U+A140: YI SYLLABLE DDAP">???</td>
            <td class="glyph yi" title="U+A15A: YI SYLLABLE NDAP">???</td>
            <td class="glyph yi" title="U+A173: YI SYLLABLE HNAP">???</td>
            <td class="glyph yi" title="U+A186: YI SYLLABLE NAP">???</td>
            <td class="glyph yi" title="U+A1A1: YI SYLLABLE HLAP">???</td>
            <td class="glyph yi" title="U+A1C2: YI SYLLABLE LAP">???</td>
            <td class="glyph yi" title="U+A1E5: YI SYLLABLE GAP">???</td>
            <td class="glyph yi" title="U+A202: YI SYLLABLE KAP">???</td>
            <td class="glyph yi" title="U+A21D: YI SYLLABLE GGAP">???</td>
            <td class="glyph yi" title="U+A235: YI SYLLABLE MGAP">???</td>
            <td class="glyph yi" title="U+A251: YI SYLLABLE HXAP">???</td>
            <td class="glyph yi" title="U+A263: YI SYLLABLE NGAP">???</td>
            <td class="glyph yi" title="U+A274: YI SYLLABLE HAP">???</td>
            <td class="glyph yi" title="U+A283: YI SYLLABLE WAP">???</td>
            <td class="glyph yi" title="U+A297: YI SYLLABLE ZAP">???</td>
            <td class="glyph yi" title="U+A2B9: YI SYLLABLE CAP">???</td>
            <td class="glyph yi" title="U+A2DB: YI SYLLABLE ZZAP">???</td>
            <td class="glyph yi" title="U+A2F7: YI SYLLABLE NZAP">???</td>
            <td class="glyph yi" title="U+A313: YI SYLLABLE SAP">???</td>
            <td class="glyph yi" title="U+A334: YI SYLLABLE SSAP">???</td>
            <td class="glyph yi" title="U+A349: YI SYLLABLE ZHAP">???</td>
            <td class="glyph yi" title="U+A364: YI SYLLABLE CHAP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A397: YI SYLLABLE NRAP">???</td>
            <td class="glyph yi" title="U+A3AE: YI SYLLABLE SHAP">???</td>
            <td class="glyph yi" title="U+A3C9: YI SYLLABLE RAP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">uot</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0B9: YI SYLLABLE MUOT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A125: YI SYLLABLE TUOT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1C3: YI SYLLABLE LUOT">???</td>
            <td class="glyph yi" title="U+A1E6: YI SYLLABLE GUOT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A21E: YI SYLLABLE GGUOT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A252: YI SYLLABLE HXUOT">???</td>
            <td class="glyph yi" title="U+A264: YI SYLLABLE NGUOT">???</td>
            <td class="glyph yi" title="U+A275: YI SYLLABLE HUOT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A365: YI SYLLABLE CHUOT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3E8: YI SYLLABLE JUOT">???</td>
            <td class="glyph yi" title="U+A404: YI SYLLABLE QUOT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A479: YI SYLLABLE YUOT">???</td>
        </tr>
        <tr>
            <th class="rowHeader">uox</th>
            <td class="glyph yi" title="U+A00C: YI SYLLABLE UOX">???</td>
            <td class="glyph yi" title="U+A022: YI SYLLABLE BUOX">???</td>
            <td class="glyph yi" title="U+A043: YI SYLLABLE PUOX">???</td>
            <td class="glyph yi" title="U+A062: YI SYLLABLE BBUOX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09C: YI SYLLABLE HMUOX">???</td>
            <td class="glyph yi" title="U+A0BA: YI SYLLABLE MUOX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A10B: YI SYLLABLE DUOX">???</td>
            <td class="glyph yi" title="U+A126: YI SYLLABLE TUOX">???</td>
            <td class="glyph yi" title="U+A141: YI SYLLABLE DDUOX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A174: YI SYLLABLE HNUOX">???</td>
            <td class="glyph yi" title="U+A187: YI SYLLABLE NUOX">???</td>
            <td class="glyph yi" title="U+A1A2: YI SYLLABLE HLUOX">???</td>
            <td class="glyph yi" title="U+A1C4: YI SYLLABLE LUOX">???</td>
            <td class="glyph yi" title="U+A1E7: YI SYLLABLE GUOX">???</td>
            <td class="glyph yi" title="U+A203: YI SYLLABLE KUOX">???</td>
            <td class="glyph yi" title="U+A21F: YI SYLLABLE GGUOX">???</td>
            <td class="glyph yi" title="U+A236: YI SYLLABLE MGUOX">???</td>
            <td class="glyph yi" title="U+A253: YI SYLLABLE HXUOX">???</td>
            <td class="glyph yi" title="U+A265: YI SYLLABLE NGUOX">???</td>
            <td class="glyph yi" title="U+A276: YI SYLLABLE HUOX">???</td>
            <td class="glyph yi" title="U+A284: YI SYLLABLE WUOX">???</td>
            <td class="glyph yi" title="U+A298: YI SYLLABLE ZUOX">???</td>
            <td class="glyph yi" title="U+A2BA: YI SYLLABLE CUOX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2F8: YI SYLLABLE NZUOX">???</td>
            <td class="glyph yi" title="U+A314: YI SYLLABLE SUOX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34A: YI SYLLABLE ZHUOX">???</td>
            <td class="glyph yi" title="U+A366: YI SYLLABLE CHUOX">???</td>
            <td class="glyph yi" title="U+A37E: YI SYLLABLE RRUOX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3AF: YI SYLLABLE SHUOX">???</td>
            <td class="glyph yi" title="U+A3CA: YI SYLLABLE RUOX">???</td>
            <td class="glyph yi" title="U+A3E9: YI SYLLABLE JUOX">???</td>
            <td class="glyph yi" title="U+A405: YI SYLLABLE QUOX">???</td>
            <td class="glyph yi" title="U+A420: YI SYLLABLE JJUOX">???</td>
            <td class="glyph yi" title="U+A439: YI SYLLABLE NJUOX">???</td>
            <td class="glyph yi" title="U+A452: YI SYLLABLE NYUOX">???</td>
            <td class="glyph yi" title="U+A465: YI SYLLABLE XUOX">???</td>
            <td class="glyph yi" title="U+A47A: YI SYLLABLE YUOX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">uo</th>
            <td class="glyph yi" title="U+A00D: YI SYLLABLE UO">???</td>
            <td class="glyph yi" title="U+A023: YI SYLLABLE BUO">???</td>
            <td class="glyph yi" title="U+A044: YI SYLLABLE PUO">???</td>
            <td class="glyph yi" title="U+A063: YI SYLLABLE BBUO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09D: YI SYLLABLE HMUO">???</td>
            <td class="glyph yi" title="U+A0BB: YI SYLLABLE MUO">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A10C: YI SYLLABLE DUO">???</td>
            <td class="glyph yi" title="U+A127: YI SYLLABLE TUO">???</td>
            <td class="glyph yi" title="U+A142: YI SYLLABLE DDUO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A175: YI SYLLABLE HNUO">???</td>
            <td class="glyph yi" title="U+A188: YI SYLLABLE NUO">???</td>
            <td class="glyph yi" title="U+A1A3: YI SYLLABLE HLUO">???</td>
            <td class="glyph yi" title="U+A1C5: YI SYLLABLE LUO">???</td>
            <td class="glyph yi" title="U+A1E8: YI SYLLABLE GUO">???</td>
            <td class="glyph yi" title="U+A204: YI SYLLABLE KUO">???</td>
            <td class="glyph yi" title="U+A220: YI SYLLABLE GGUO">???</td>
            <td class="glyph yi" title="U+A237: YI SYLLABLE MGUO">???</td>
            <td class="glyph yi" title="U+A254: YI SYLLABLE HXUO">???</td>
            <td class="glyph yi" title="U+A266: YI SYLLABLE NGUO">???</td>
            <td class="glyph yi" title="U+A277: YI SYLLABLE HUO">???</td>
            <td class="glyph yi" title="U+A285: YI SYLLABLE WUO">???</td>
            <td class="glyph yi" title="U+A299: YI SYLLABLE ZUO">???</td>
            <td class="glyph yi" title="U+A2BB: YI SYLLABLE CUO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2F9: YI SYLLABLE NZUO">???</td>
            <td class="glyph yi" title="U+A315: YI SYLLABLE SUO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34B: YI SYLLABLE ZHUO">???</td>
            <td class="glyph yi" title="U+A367: YI SYLLABLE CHUO">???</td>
            <td class="glyph yi" title="U+A37F: YI SYLLABLE RRUO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B0: YI SYLLABLE SHUO">???</td>
            <td class="glyph yi" title="U+A3CB: YI SYLLABLE RUO">???</td>
            <td class="glyph yi" title="U+A3EA: YI SYLLABLE JUO">???</td>
            <td class="glyph yi" title="U+A406: YI SYLLABLE QUO">???</td>
            <td class="glyph yi" title="U+A421: YI SYLLABLE JJUO">???</td>
            <td class="glyph yi" title="U+A43A: YI SYLLABLE NJUO">???</td>
            <td class="glyph yi" title="U+A453: YI SYLLABLE NYUO">???</td>
            <td class="glyph yi" title="U+A466: YI SYLLABLE XUO">???</td>
            <td class="glyph yi" title="U+A47B: YI SYLLABLE YUO">???</td>
        </tr>
        <tr>
            <th class="rowHeader">uop</th>
            <td class="glyph yi" title="U+A00E: YI SYLLABLE UOP">???</td>
            <td class="glyph yi" title="U+A024: YI SYLLABLE BUOP">???</td>
            <td class="glyph yi" title="U+A045: YI SYLLABLE PUOP">???</td>
            <td class="glyph yi" title="U+A064: YI SYLLABLE BBUOP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A09E: YI SYLLABLE HMUOP">???</td>
            <td class="glyph yi" title="U+A0BC: YI SYLLABLE MUOP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A128: YI SYLLABLE TUOP">???</td>
            <td class="glyph yi" title="U+A143: YI SYLLABLE DDUOP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A189: YI SYLLABLE NUOP">???</td>
            <td class="glyph yi" title="U+A1A4: YI SYLLABLE HLUOP">???</td>
            <td class="glyph yi" title="U+A1C6: YI SYLLABLE LUOP">???</td>
            <td class="glyph yi" title="U+A1E9: YI SYLLABLE GUOP">???</td>
            <td class="glyph yi" title="U+A205: YI SYLLABLE KUOP">???</td>
            <td class="glyph yi" title="U+A221: YI SYLLABLE GGUOP">???</td>
            <td class="glyph yi" title="U+A238: YI SYLLABLE MGUOP">???</td>
            <td class="glyph yi" title="U+A255: YI SYLLABLE HXUOP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A278: YI SYLLABLE HUOP">???</td>
            <td class="glyph yi" title="U+A286: YI SYLLABLE WUOP">???</td>
            <td class="glyph yi" title="U+A29A: YI SYLLABLE ZUOP">???</td>
            <td class="glyph yi" title="U+A2BC: YI SYLLABLE CUOP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A316: YI SYLLABLE SUOP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A34C: YI SYLLABLE ZHUOP">???</td>
            <td class="glyph yi" title="U+A368: YI SYLLABLE CHUOP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B1: YI SYLLABLE SHUOP">???</td>
            <td class="glyph yi" title="U+A3CC: YI SYLLABLE RUOP">???</td>
            <td class="glyph yi" title="U+A3EB: YI SYLLABLE JUOP">???</td>
            <td class="glyph yi" title="U+A407: YI SYLLABLE QUOP">???</td>
            <td class="glyph yi" title="U+A422: YI SYLLABLE JJUOP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A454: YI SYLLABLE NYUOP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A47C: YI SYLLABLE YUOP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ot</th>
            <td class="glyph yi" title="U+A00F: YI SYLLABLE OT">???</td>
            <td class="glyph yi" title="U+A025: YI SYLLABLE BOT">???</td>
            <td class="glyph yi" title="U+A046: YI SYLLABLE POT">???</td>
            <td class="glyph yi" title="U+A065: YI SYLLABLE BBOT">???</td>
            <td class="glyph yi" title="U+A081: YI SYLLABLE NBOT">???</td>
            <td class="glyph yi" title="U+A09F: YI SYLLABLE HMOT">???</td>
            <td class="glyph yi" title="U+A0BD: YI SYLLABLE MOT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0EE: YI SYLLABLE VOT">???</td>
            <td class="glyph yi" title="U+A10D: YI SYLLABLE DOT">???</td>
            <td class="glyph yi" title="U+A129: YI SYLLABLE TOT">???</td>
            <td class="glyph yi" title="U+A144: YI SYLLABLE DDOT">???</td>
            <td class="glyph yi" title="U+A15B: YI SYLLABLE NDOT">???</td>
            <td class="glyph yi" title="U+A176: YI SYLLABLE HNOT">???</td>
            <td class="glyph yi" title="U+A18A: YI SYLLABLE NOT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1C7: YI SYLLABLE LOT">???</td>
            <td class="glyph yi" title="U+A1EA: YI SYLLABLE GOT">???</td>
            <td class="glyph yi" title="U+A206: YI SYLLABLE KOT">???</td>
            <td class="glyph yi" title="U+A222: YI SYLLABLE GGOT">???</td>
            <td class="glyph yi" title="U+A239: YI SYLLABLE MGOT">???</td>
            <td class="glyph yi" title="U+A256: YI SYLLABLE HXOT">???</td>
            <td class="glyph yi" title="U+A267: YI SYLLABLE NGOT">???</td>
            <td class="glyph yi" title="U+A279: YI SYLLABLE HOT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A29B: YI SYLLABLE ZOT">???</td>
            <td class="glyph yi" title="U+A2BD: YI SYLLABLE COT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A317: YI SYLLABLE SOT">???</td>
            <td class="glyph yi" title="U+A335: YI SYLLABLE SSOT">???</td>
            <td class="glyph yi" title="U+A34D: YI SYLLABLE ZHOT">???</td>
            <td class="glyph yi" title="U+A369: YI SYLLABLE CHOT">???</td>
            <td class="glyph yi" title="U+A380: YI SYLLABLE RROT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A3B2: YI SYLLABLE SHOT">???</td>
            <td class="glyph yi" title="U+A3CD: YI SYLLABLE ROT">???</td>
            <td class="glyph yi" title="U+A3EC: YI SYLLABLE JOT">???</td>
            <td class="glyph yi" title="U+A408: YI SYLLABLE QOT">???</td>
            <td class="glyph yi" title="U+A423: YI SYLLABLE JJOT">???</td>
            <td class="glyph yi" title="U+A43B: YI SYLLABLE NJOT">???</td>
            <td class="glyph yi" title="U+A455: YI SYLLABLE NYOT">???</td>
            <td class="glyph yi" title="U+A467: YI SYLLABLE XOT">???</td>
            <td class="glyph yi" title="U+A47D: YI SYLLABLE YOT">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ox</th>
            <td class="glyph yi" title="U+A010: YI SYLLABLE OX">???</td>
            <td class="glyph yi" title="U+A026: YI SYLLABLE BOX">???</td>
            <td class="glyph yi" title="U+A047: YI SYLLABLE POX">???</td>
            <td class="glyph yi" title="U+A066: YI SYLLABLE BBOX">???</td>
            <td class="glyph yi" title="U+A082: YI SYLLABLE NBOX">???</td>
            <td class="glyph yi" title="U+A0A0: YI SYLLABLE HMOX">???</td>
            <td class="glyph yi" title="U+A0BE: YI SYLLABLE MOX">???</td>
            <td class="glyph yi" title="U+A0D5: YI SYLLABLE FOX">???</td>
            <td class="glyph yi" title="U+A0EF: YI SYLLABLE VOX">???</td>
            <td class="glyph yi" title="U+A10E: YI SYLLABLE DOX">???</td>
            <td class="glyph yi" title="U+A12A: YI SYLLABLE TOX">???</td>
            <td class="glyph yi" title="U+A145: YI SYLLABLE DDOX">???</td>
            <td class="glyph yi" title="U+A15C: YI SYLLABLE NDOX">???</td>
            <td class="glyph yi" title="U+A177: YI SYLLABLE HNOX">???</td>
            <td class="glyph yi" title="U+A18B: YI SYLLABLE NOX">???</td>
            <td class="glyph yi" title="U+A1A5: YI SYLLABLE HLOX">???</td>
            <td class="glyph yi" title="U+A1C8: YI SYLLABLE LOX">???</td>
            <td class="glyph yi" title="U+A1EB: YI SYLLABLE GOX">???</td>
            <td class="glyph yi" title="U+A207: YI SYLLABLE KOX">???</td>
            <td class="glyph yi" title="U+A223: YI SYLLABLE GGOX">???</td>
            <td class="glyph yi" title="U+A23A: YI SYLLABLE MGOX">???</td>
            <td class="glyph yi" title="U+A257: YI SYLLABLE HXOX">???</td>
            <td class="glyph yi" title="U+A268: YI SYLLABLE NGOX">???</td>
            <td class="glyph yi" title="U+A27A: YI SYLLABLE HOX">???</td>
            <td class="glyph yi" title="U+A287: YI SYLLABLE WOX">???</td>
            <td class="glyph yi" title="U+A29C: YI SYLLABLE ZOX">???</td>
            <td class="glyph yi" title="U+A2BE: YI SYLLABLE COX">???</td>
            <td class="glyph yi" title="U+A2DC: YI SYLLABLE ZZOX">???</td>
            <td class="glyph yi" title="U+A2FA: YI SYLLABLE NZOX">???</td>
            <td class="glyph yi" title="U+A318: YI SYLLABLE SOX">???</td>
            <td class="glyph yi" title="U+A336: YI SYLLABLE SSOX">???</td>
            <td class="glyph yi" title="U+A34E: YI SYLLABLE ZHOX">???</td>
            <td class="glyph yi" title="U+A36A: YI SYLLABLE CHOX">???</td>
            <td class="glyph yi" title="U+A381: YI SYLLABLE RROX">???</td>
            <td class="glyph yi" title="U+A398: YI SYLLABLE NROX">???</td>
            <td class="glyph yi" title="U+A3B3: YI SYLLABLE SHOX">???</td>
            <td class="glyph yi" title="U+A3CE: YI SYLLABLE ROX">???</td>
            <td class="glyph yi" title="U+A3ED: YI SYLLABLE JOX">???</td>
            <td class="glyph yi" title="U+A409: YI SYLLABLE QOX">???</td>
            <td class="glyph yi" title="U+A424: YI SYLLABLE JJOX">???</td>
            <td class="glyph yi" title="U+A43C: YI SYLLABLE NJOX">???</td>
            <td class="glyph yi" title="U+A456: YI SYLLABLE NYOX">???</td>
            <td class="glyph yi" title="U+A468: YI SYLLABLE XOX">???</td>
            <td class="glyph yi" title="U+A47E: YI SYLLABLE YOX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">o</th>
            <td class="glyph yi" title="U+A011: YI SYLLABLE O">???</td>
            <td class="glyph yi" title="U+A027: YI SYLLABLE BO">???</td>
            <td class="glyph yi" title="U+A048: YI SYLLABLE PO">???</td>
            <td class="glyph yi" title="U+A067: YI SYLLABLE BBO">???</td>
            <td class="glyph yi" title="U+A083: YI SYLLABLE NBO">???</td>
            <td class="glyph yi" title="U+A0A1: YI SYLLABLE HMO">???</td>
            <td class="glyph yi" title="U+A0BF: YI SYLLABLE MO">???</td>
            <td class="glyph yi" title="U+A0D6: YI SYLLABLE FO">???</td>
            <td class="glyph yi" title="U+A0F0: YI SYLLABLE VO">???</td>
            <td class="glyph yi" title="U+A10F: YI SYLLABLE DO">???</td>
            <td class="glyph yi" title="U+A12B: YI SYLLABLE TO">???</td>
            <td class="glyph yi" title="U+A146: YI SYLLABLE DDO">???</td>
            <td class="glyph yi" title="U+A15D: YI SYLLABLE NDO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A18C: YI SYLLABLE NO">???</td>
            <td class="glyph yi" title="U+A1A6: YI SYLLABLE HLO">???</td>
            <td class="glyph yi" title="U+A1C9: YI SYLLABLE LO">???</td>
            <td class="glyph yi" title="U+A1EC: YI SYLLABLE GO">???</td>
            <td class="glyph yi" title="U+A208: YI SYLLABLE KO">???</td>
            <td class="glyph yi" title="U+A224: YI SYLLABLE GGO">???</td>
            <td class="glyph yi" title="U+A23B: YI SYLLABLE MGO">???</td>
            <td class="glyph yi" title="U+A258: YI SYLLABLE HXO">???</td>
            <td class="glyph yi" title="U+A269: YI SYLLABLE NGO">???</td>
            <td class="glyph yi" title="U+A27B: YI SYLLABLE HO">???</td>
            <td class="glyph yi" title="U+A288: YI SYLLABLE WO">???</td>
            <td class="glyph yi" title="U+A29D: YI SYLLABLE ZO">???</td>
            <td class="glyph yi" title="U+A2BF: YI SYLLABLE CO">???</td>
            <td class="glyph yi" title="U+A2DD: YI SYLLABLE ZZO">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A319: YI SYLLABLE SO">???</td>
            <td class="glyph yi" title="U+A337: YI SYLLABLE SSO">???</td>
            <td class="glyph yi" title="U+A34F: YI SYLLABLE ZHO">???</td>
            <td class="glyph yi" title="U+A36B: YI SYLLABLE CHO">???</td>
            <td class="glyph yi" title="U+A382: YI SYLLABLE RRO">???</td>
            <td class="glyph yi" title="U+A399: YI SYLLABLE NRO">???</td>
            <td class="glyph yi" title="U+A3B4: YI SYLLABLE SHO">???</td>
            <td class="glyph yi" title="U+A3CF: YI SYLLABLE RO">???</td>
            <td class="glyph yi" title="U+A3EE: YI SYLLABLE JO">???</td>
            <td class="glyph yi" title="U+A40A: YI SYLLABLE QO">???</td>
            <td class="glyph yi" title="U+A425: YI SYLLABLE JJO">???</td>
            <td class="glyph yi" title="U+A43D: YI SYLLABLE NJO">???</td>
            <td class="glyph yi" title="U+A457: YI SYLLABLE NYO">???</td>
            <td class="glyph yi" title="U+A469: YI SYLLABLE XO">???</td>
            <td class="glyph yi" title="U+A47F: YI SYLLABLE YO">???</td>
        </tr>
        <tr>
            <th class="rowHeader">op</th>
            <td class="glyph yi" title="U+A012: YI SYLLABLE OP">???</td>
            <td class="glyph yi" title="U+A028: YI SYLLABLE BOP">???</td>
            <td class="glyph yi" title="U+A049: YI SYLLABLE POP">???</td>
            <td class="glyph yi" title="U+A068: YI SYLLABLE BBOP">???</td>
            <td class="glyph yi" title="U+A084: YI SYLLABLE NBOP">???</td>
            <td class="glyph yi" title="U+A0A2: YI SYLLABLE HMOP">???</td>
            <td class="glyph yi" title="U+A0C0: YI SYLLABLE MOP">???</td>
            <td class="glyph yi" title="U+A0D7: YI SYLLABLE FOP">???</td>
            <td class="glyph yi" title="U+A0F1: YI SYLLABLE VOP">???</td>
            <td class="glyph yi" title="U+A110: YI SYLLABLE DOP">???</td>
            <td class="glyph yi" title="U+A12C: YI SYLLABLE TOP">???</td>
            <td class="glyph yi" title="U+A147: YI SYLLABLE DDOP">???</td>
            <td class="glyph yi" title="U+A15E: YI SYLLABLE NDOP">???</td>
            <td class="glyph yi" title="U+A178: YI SYLLABLE HNOP">???</td>
            <td class="glyph yi" title="U+A18D: YI SYLLABLE NOP">???</td>
            <td class="glyph yi" title="U+A1A7: YI SYLLABLE HLOP">???</td>
            <td class="glyph yi" title="U+A1CA: YI SYLLABLE LOP">???</td>
            <td class="glyph yi" title="U+A1ED: YI SYLLABLE GOP">???</td>
            <td class="glyph yi" title="U+A209: YI SYLLABLE KOP">???</td>
            <td class="glyph yi" title="U+A225: YI SYLLABLE GGOP">???</td>
            <td class="glyph yi" title="U+A23C: YI SYLLABLE MGOP">???</td>
            <td class="glyph yi" title="U+A259: YI SYLLABLE HXOP">???</td>
            <td class="glyph yi" title="U+A26A: YI SYLLABLE NGOP">???</td>
            <td class="glyph yi" title="U+A27C: YI SYLLABLE HOP">???</td>
            <td class="glyph yi" title="U+A289: YI SYLLABLE WOP">???</td>
            <td class="glyph yi" title="U+A29E: YI SYLLABLE ZOP">???</td>
            <td class="glyph yi" title="U+A2C0: YI SYLLABLE COP">???</td>
            <td class="glyph yi" title="U+A2DE: YI SYLLABLE ZZOP">???</td>
            <td class="glyph yi" title="U+A2FB: YI SYLLABLE NZOP">???</td>
            <td class="glyph yi" title="U+A31A: YI SYLLABLE SOP">???</td>
            <td class="glyph yi" title="U+A338: YI SYLLABLE SSOP">???</td>
            <td class="glyph yi" title="U+A350: YI SYLLABLE ZHOP">???</td>
            <td class="glyph yi" title="U+A36C: YI SYLLABLE CHOP">???</td>
            <td class="glyph yi" title="U+A383: YI SYLLABLE RROP">???</td>
            <td class="glyph yi" title="U+A39A: YI SYLLABLE NROP">???</td>
            <td class="glyph yi" title="U+A3B5: YI SYLLABLE SHOP">???</td>
            <td class="glyph yi" title="U+A3D0: YI SYLLABLE ROP">???</td>
            <td class="glyph yi" title="U+A3EF: YI SYLLABLE JOP">???</td>
            <td class="glyph yi" title="U+A40B: YI SYLLABLE QOP">???</td>
            <td class="glyph yi" title="U+A426: YI SYLLABLE JJOP">???</td>
            <td class="glyph yi" title="U+A43E: YI SYLLABLE NJOP">???</td>
            <td class="glyph yi" title="U+A458: YI SYLLABLE NYOP">???</td>
            <td class="glyph yi" title="U+A46A: YI SYLLABLE XOP">???</td>
            <td class="glyph yi" title="U+A480: YI SYLLABLE YOP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">et</th>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1EE: YI SYLLABLE GET">???</td>
            <td class="glyph yi" title="U+A20A: YI SYLLABLE KET">???</td>
            <td class="glyph yi" title="U+A226: YI SYLLABLE GGET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A351: YI SYLLABLE ZHET">???</td>
            <td class="glyph yi" title="U+A36D: YI SYLLABLE CHET">???</td>
            <td class="glyph yi" title="U+A384: YI SYLLABLE RRET">???</td>
            <td class="glyph yi" title="U+A39B: YI SYLLABLE NRET">???</td>
            <td class="glyph yi" title="U+A3B6: YI SYLLABLE SHET">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ex</th>
            <td class="glyph yi" title="U+A013: YI SYLLABLE EX">???</td>
            <td class="glyph yi" title="U+A029: YI SYLLABLE BEX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A069: YI SYLLABLE BBEX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C1: YI SYLLABLE MEX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0F2: YI SYLLABLE VEX">???</td>
            <td class="glyph yi" title="U+A111: YI SYLLABLE DEX">???</td>
            <td class="glyph yi" title="U+A12D: YI SYLLABLE TEX">???</td>
            <td class="glyph yi" title="U+A148: YI SYLLABLE DDEX">???</td>
            <td class="glyph yi" title="U+A15F: YI SYLLABLE NDEX">???</td>
            <td class="glyph yi" title="U+A179: YI SYLLABLE HNEX">???</td>
            <td class="glyph yi" title="U+A18E: YI SYLLABLE NEX">???</td>
            <td class="glyph yi" title="U+A1A8: YI SYLLABLE HLEX">???</td>
            <td class="glyph yi" title="U+A1CB: YI SYLLABLE LEX">???</td>
            <td class="glyph yi" title="U+A1EF: YI SYLLABLE GEX">???</td>
            <td class="glyph yi" title="U+A20B: YI SYLLABLE KEX">???</td>
            <td class="glyph yi" title="U+A227: YI SYLLABLE GGEX">???</td>
            <td class="glyph yi" title="U+A23D: YI SYLLABLE MGEX">???</td>
            <td class="glyph yi" title="U+A25A: YI SYLLABLE HXEX">???</td>
            <td class="glyph yi" title="U+A26B: YI SYLLABLE NGEX">???</td>
            <td class="glyph yi" title="U+A27D: YI SYLLABLE HEX">???</td>
            <td class="glyph yi" title="U+A28A: YI SYLLABLE WEX">???</td>
            <td class="glyph yi" title="U+A29F: YI SYLLABLE ZEX">???</td>
            <td class="glyph yi" title="U+A2C1: YI SYLLABLE CEX">???</td>
            <td class="glyph yi" title="U+A2DF: YI SYLLABLE ZZEX">???</td>
            <td class="glyph yi" title="U+A2FC: YI SYLLABLE NZEX">???</td>
            <td class="glyph yi" title="U+A31B: YI SYLLABLE SEX">???</td>
            <td class="glyph yi" title="U+A339: YI SYLLABLE SSEX">???</td>
            <td class="glyph yi" title="U+A352: YI SYLLABLE ZHEX">???</td>
            <td class="glyph yi" title="U+A36E: YI SYLLABLE CHEX">???</td>
            <td class="glyph yi" title="U+A385: YI SYLLABLE RREX">???</td>
            <td class="glyph yi" title="U+A39C: YI SYLLABLE NREX">???</td>
            <td class="glyph yi" title="U+A3B7: YI SYLLABLE SHEX">???</td>
            <td class="glyph yi" title="U+A3D1: YI SYLLABLE REX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">e</th>
            <td class="glyph yi" title="U+A014: YI SYLLABLE E">???</td>
            <td class="glyph yi" title="U+A02A: YI SYLLABLE BE">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A06A: YI SYLLABLE BBE">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C2: YI SYLLABLE ME">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A112: YI SYLLABLE DE">???</td>
            <td class="glyph yi" title="U+A12E: YI SYLLABLE TE">???</td>
            <td class="glyph yi" title="U+A149: YI SYLLABLE DDE">???</td>
            <td class="glyph yi" title="U+A160: YI SYLLABLE NDE">???</td>
            <td class="glyph yi" title="U+A17A: YI SYLLABLE HNE">???</td>
            <td class="glyph yi" title="U+A18F: YI SYLLABLE NE">???</td>
            <td class="glyph yi" title="U+A1A9: YI SYLLABLE HLE">???</td>
            <td class="glyph yi" title="U+A1CC: YI SYLLABLE LE">???</td>
            <td class="glyph yi" title="U+A1F0: YI SYLLABLE GE">???</td>
            <td class="glyph yi" title="U+A20C: YI SYLLABLE KE">???</td>
            <td class="glyph yi" title="U+A228: YI SYLLABLE GGE">???</td>
            <td class="glyph yi" title="U+A23E: YI SYLLABLE MGE">???</td>
            <td class="glyph yi" title="U+A25B: YI SYLLABLE HXE">???</td>
            <td class="glyph yi" title="U+A26C: YI SYLLABLE NGE">???</td>
            <td class="glyph yi" title="U+A27E: YI SYLLABLE HE">???</td>
            <td class="glyph yi" title="U+A28B: YI SYLLABLE WE">???</td>
            <td class="glyph yi" title="U+A2A0: YI SYLLABLE ZE">???</td>
            <td class="glyph yi" title="U+A2C2: YI SYLLABLE CE">???</td>
            <td class="glyph yi" title="U+A2E0: YI SYLLABLE ZZE">???</td>
            <td class="glyph yi" title="U+A2FD: YI SYLLABLE NZE">???</td>
            <td class="glyph yi" title="U+A31C: YI SYLLABLE SE">???</td>
            <td class="glyph yi" title="U+A33A: YI SYLLABLE SSE">???</td>
            <td class="glyph yi" title="U+A353: YI SYLLABLE ZHE">???</td>
            <td class="glyph yi" title="U+A36F: YI SYLLABLE CHE">???</td>
            <td class="glyph yi" title="U+A386: YI SYLLABLE RRE">???</td>
            <td class="glyph yi" title="U+A39D: YI SYLLABLE NRE">???</td>
            <td class="glyph yi" title="U+A3B8: YI SYLLABLE SHE">???</td>
            <td class="glyph yi" title="U+A3D2: YI SYLLABLE RE">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ep</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02B: YI SYLLABLE BEP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A06B: YI SYLLABLE BBEP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0F3: YI SYLLABLE VEP">???</td>
            <td class="glyph yi" title="U+A113: YI SYLLABLE DEP">???</td>
            <td class="glyph yi" title="U+A12F: YI SYLLABLE TEP">???</td>
            <td class="glyph yi" title="U+A14A: YI SYLLABLE DDEP">???</td>
            <td class="glyph yi" title="U+A161: YI SYLLABLE NDEP">???</td>
            <td class="glyph yi" title="U+A17B: YI SYLLABLE HNEP">???</td>
            <td class="glyph yi" title="U+A190: YI SYLLABLE NEP">???</td>
            <td class="glyph yi" title="U+A1AA: YI SYLLABLE HLEP">???</td>
            <td class="glyph yi" title="U+A1CD: YI SYLLABLE LEP">???</td>
            <td class="glyph yi" title="U+A1F1: YI SYLLABLE GEP">???</td>
            <td class="glyph yi" title="U+A20D: YI SYLLABLE KEP">???</td>
            <td class="glyph yi" title="U+A229: YI SYLLABLE GGEP">???</td>
            <td class="glyph yi" title="U+A23F: YI SYLLABLE MGEP">???</td>
            <td class="glyph yi" title="U+A25C: YI SYLLABLE HXEP">???</td>
            <td class="glyph yi" title="U+A26D: YI SYLLABLE NGEP">???</td>
            <td class="glyph yi" title="U+A27F: YI SYLLABLE HEP">???</td>
            <td class="glyph yi" title="U+A28C: YI SYLLABLE WEP">???</td>
            <td class="glyph yi" title="U+A2A1: YI SYLLABLE ZEP">???</td>
            <td class="glyph yi" title="U+A2C3: YI SYLLABLE CEP">???</td>
            <td class="glyph yi" title="U+A2E1: YI SYLLABLE ZZEP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A31D: YI SYLLABLE SEP">???</td>
            <td class="glyph yi" title="U+A33B: YI SYLLABLE SSEP">???</td>
            <td class="glyph yi" title="U+A354: YI SYLLABLE ZHEP">???</td>
            <td class="glyph yi" title="U+A370: YI SYLLABLE CHEP">???</td>
            <td class="glyph yi" title="U+A387: YI SYLLABLE RREP">???</td>
            <td class="glyph yi" title="U+A39E: YI SYLLABLE NREP">???</td>
            <td class="glyph yi" title="U+A3B9: YI SYLLABLE SHEP">???</td>
            <td class="glyph yi" title="U+A3D3: YI SYLLABLE REP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <th class="rowHeader">ut</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02C: YI SYLLABLE BUT">???</td>
            <td class="glyph yi" title="U+A04A: YI SYLLABLE PUT">???</td>
            <td class="glyph yi" title="U+A06C: YI SYLLABLE BBUT">???</td>
            <td class="glyph yi" title="U+A085: YI SYLLABLE NBUT">???</td>
            <td class="glyph yi" title="U+A0A3: YI SYLLABLE HMUT">???</td>
            <td class="glyph yi" title="U+A0C3: YI SYLLABLE MUT">???</td>
            <td class="glyph yi" title="U+A0D8: YI SYLLABLE FUT">???</td>
            <td class="glyph yi" title="U+A0F4: YI SYLLABLE VUT">???</td>
            <td class="glyph yi" title="U+A114: YI SYLLABLE DUT">???</td>
            <td class="glyph yi" title="U+A130: YI SYLLABLE TUT">???</td>
            <td class="glyph yi" title="U+A14B: YI SYLLABLE DDUT">???</td>
            <td class="glyph yi" title="U+A162: YI SYLLABLE NDUT">???</td>
            <td class="glyph yi" title="U+A17C: YI SYLLABLE HNUT">???</td>
            <td class="glyph yi" title="U+A191: YI SYLLABLE NUT">???</td>
            <td class="glyph yi" title="U+A1AB: YI SYLLABLE HLUT">???</td>
            <td class="glyph yi" title="U+A1CE: YI SYLLABLE LUT">???</td>
            <td class="glyph yi" title="U+A1F2: YI SYLLABLE GUT">???</td>
            <td class="glyph yi" title="U+A20E: YI SYLLABLE KUT">???</td>
            <td class="glyph yi" title="U+A22A: YI SYLLABLE GGUT">???</td>
            <td class="glyph yi" title="U+A240: YI SYLLABLE MGUT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A2: YI SYLLABLE ZUT">???</td>
            <td class="glyph yi" title="U+A2C4: YI SYLLABLE CUT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A31E: YI SYLLABLE SUT">???</td>
            <td class="glyph yi" title="U+A33C: YI SYLLABLE SSUT">???</td>
            <td class="glyph yi" title="U+A355: YI SYLLABLE ZHUT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A388: YI SYLLABLE RRUT">???</td>
            <td class="glyph yi" title="U+A39F: YI SYLLABLE NRUT">???</td>
            <td class="glyph yi" title="U+A3BA: YI SYLLABLE SHUT">???</td>
            <td class="glyph yi" title="U+A3D4: YI SYLLABLE RUT">???</td>
            <td class="glyph yi" title="U+A3F0: YI SYLLABLE JUT">???</td>
            <td class="glyph yi" title="U+A40C: YI SYLLABLE QUT">???</td>
            <td class="glyph yi" title="U+A427: YI SYLLABLE JJUT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A459: YI SYLLABLE NYUT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A481: YI SYLLABLE YUT">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ux</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02D: YI SYLLABLE BUX">???</td>
            <td class="glyph yi" title="U+A04B: YI SYLLABLE PUX">???</td>
            <td class="glyph yi" title="U+A06D: YI SYLLABLE BBUX">???</td>
            <td class="glyph yi" title="U+A086: YI SYLLABLE NBUX">???</td>
            <td class="glyph yi" title="U+A0A4: YI SYLLABLE HMUX">???</td>
            <td class="glyph yi" title="U+A0C4: YI SYLLABLE MUX">???</td>
            <td class="glyph yi" title="U+A0D9: YI SYLLABLE FUX">???</td>
            <td class="glyph yi" title="U+A0F5: YI SYLLABLE VUX">???</td>
            <td class="glyph yi" title="U+A115: YI SYLLABLE DUX">???</td>
            <td class="glyph yi" title="U+A131: YI SYLLABLE TUX">???</td>
            <td class="glyph yi" title="U+A14C: YI SYLLABLE DDUX">???</td>
            <td class="glyph yi" title="U+A163: YI SYLLABLE NDUX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A192: YI SYLLABLE NUX">???</td>
            <td class="glyph yi" title="U+A1AC: YI SYLLABLE HLUX">???</td>
            <td class="glyph yi" title="U+A1CF: YI SYLLABLE LUX">???</td>
            <td class="glyph yi" title="U+A1F3: YI SYLLABLE GUX">???</td>
            <td class="glyph yi" title="U+A20F: YI SYLLABLE KUX">???</td>
            <td class="glyph yi" title="U+A22B: YI SYLLABLE GGUX">???</td>
            <td class="glyph yi" title="U+A241: YI SYLLABLE MGUX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A3: YI SYLLABLE ZUX">???</td>
            <td class="glyph yi" title="U+A2C5: YI SYLLABLE CUX">???</td>
            <td class="glyph yi" title="U+A2E2: YI SYLLABLE ZZUX">???</td>
            <td class="glyph yi" title="U+A2FE: YI SYLLABLE NZUX">???</td>
            <td class="glyph yi" title="U+A31F: YI SYLLABLE SUX">???</td>
            <td class="glyph yi" title="U+A33D: YI SYLLABLE SSUX">???</td>
            <td class="glyph yi" title="U+A356: YI SYLLABLE ZHUX">???</td>
            <td class="glyph yi" title="U+A371: YI SYLLABLE CHUX">???</td>
            <td class="glyph yi" title="U+A389: YI SYLLABLE RRUX">???</td>
            <td class="glyph yi" title="U+A3A0: YI SYLLABLE NRUX">???</td>
            <td class="glyph yi" title="U+A3BB: YI SYLLABLE SHUX">???</td>
            <td class="glyph yi" title="U+A3D5: YI SYLLABLE RUX">???</td>
            <td class="glyph yi" title="U+A3F1: YI SYLLABLE JUX">???</td>
            <td class="glyph yi" title="U+A40D: YI SYLLABLE QUX">???</td>
            <td class="glyph yi" title="U+A428: YI SYLLABLE JJUX">???</td>
            <td class="glyph yi" title="U+A43F: YI SYLLABLE NJUX">???</td>
            <td class="glyph yi" title="U+A45A: YI SYLLABLE NYUX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A482: YI SYLLABLE YUX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">u</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02E: YI SYLLABLE BU">???</td>
            <td class="glyph yi" title="U+A04C: YI SYLLABLE PU">???</td>
            <td class="glyph yi" title="U+A06E: YI SYLLABLE BBU">???</td>
            <td class="glyph yi" title="U+A087: YI SYLLABLE NBU">???</td>
            <td class="glyph yi" title="U+A0A5: YI SYLLABLE HMU">???</td>
            <td class="glyph yi" title="U+A0C5: YI SYLLABLE MU">???</td>
            <td class="glyph yi" title="U+A0DA: YI SYLLABLE FU">???</td>
            <td class="glyph yi" title="U+A0F6: YI SYLLABLE VU">???</td>
            <td class="glyph yi" title="U+A116: YI SYLLABLE DU">???</td>
            <td class="glyph yi" title="U+A132: YI SYLLABLE TU">???</td>
            <td class="glyph yi" title="U+A14D: YI SYLLABLE DDU">???</td>
            <td class="glyph yi" title="U+A164: YI SYLLABLE NDU">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A193: YI SYLLABLE NU">???</td>
            <td class="glyph yi" title="U+A1AD: YI SYLLABLE HLU">???</td>
            <td class="glyph yi" title="U+A1D0: YI SYLLABLE LU">???</td>
            <td class="glyph yi" title="U+A1F4: YI SYLLABLE GU">???</td>
            <td class="glyph yi" title="U+A210: YI SYLLABLE KU">???</td>
            <td class="glyph yi" title="U+A22C: YI SYLLABLE GGU">???</td>
            <td class="glyph yi" title="U+A242: YI SYLLABLE MGU">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A4: YI SYLLABLE ZU">???</td>
            <td class="glyph yi" title="U+A2C6: YI SYLLABLE CU">???</td>
            <td class="glyph yi" title="U+A2E3: YI SYLLABLE ZZU">???</td>
            <td class="glyph yi" title="U+A2FF: YI SYLLABLE NZU">???</td>
            <td class="glyph yi" title="U+A320: YI SYLLABLE SU">???</td>
            <td class="glyph yi" title="U+A33E: YI SYLLABLE SSU">???</td>
            <td class="glyph yi" title="U+A357: YI SYLLABLE ZHU">???</td>
            <td class="glyph yi" title="U+A372: YI SYLLABLE CHU">???</td>
            <td class="glyph yi" title="U+A38A: YI SYLLABLE RRU">???</td>
            <td class="glyph yi" title="U+A3A1: YI SYLLABLE NRU">???</td>
            <td class="glyph yi" title="U+A3BC: YI SYLLABLE SHU">???</td>
            <td class="glyph yi" title="U+A3D6: YI SYLLABLE RU">???</td>
            <td class="glyph yi" title="U+A3F2: YI SYLLABLE JU">???</td>
            <td class="glyph yi" title="U+A40E: YI SYLLABLE QU">???</td>
            <td class="glyph yi" title="U+A429: YI SYLLABLE JJU">???</td>
            <td class="glyph yi" title="U+A440: YI SYLLABLE NJU">???</td>
            <td class="glyph yi" title="U+A45B: YI SYLLABLE NYU">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A483: YI SYLLABLE YU">???</td>
        </tr>
        <tr>
            <th class="rowHeader">up</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A02F: YI SYLLABLE BUP">???</td>
            <td class="glyph yi" title="U+A04D: YI SYLLABLE PUP">???</td>
            <td class="glyph yi" title="U+A06F: YI SYLLABLE BBUP">???</td>
            <td class="glyph yi" title="U+A088: YI SYLLABLE NBUP">???</td>
            <td class="glyph yi" title="U+A0A6: YI SYLLABLE HMUP">???</td>
            <td class="glyph yi" title="U+A0C6: YI SYLLABLE MUP">???</td>
            <td class="glyph yi" title="U+A0DB: YI SYLLABLE FUP">???</td>
            <td class="glyph yi" title="U+A0F7: YI SYLLABLE VUP">???</td>
            <td class="glyph yi" title="U+A117: YI SYLLABLE DUP">???</td>
            <td class="glyph yi" title="U+A133: YI SYLLABLE TUP">???</td>
            <td class="glyph yi" title="U+A14E: YI SYLLABLE DDUP">???</td>
            <td class="glyph yi" title="U+A165: YI SYLLABLE NDUP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A194: YI SYLLABLE NUP">???</td>
            <td class="glyph yi" title="U+A1AE: YI SYLLABLE HLUP">???</td>
            <td class="glyph yi" title="U+A1D1: YI SYLLABLE LUP">???</td>
            <td class="glyph yi" title="U+A1F5: YI SYLLABLE GUP">???</td>
            <td class="glyph yi" title="U+A211: YI SYLLABLE KUP">???</td>
            <td class="glyph yi" title="U+A22D: YI SYLLABLE GGUP">???</td>
            <td class="glyph yi" title="U+A243: YI SYLLABLE MGUP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A5: YI SYLLABLE ZUP">???</td>
            <td class="glyph yi" title="U+A2C7: YI SYLLABLE CUP">???</td>
            <td class="glyph yi" title="U+A2E4: YI SYLLABLE ZZUP">???</td>
            <td class="glyph yi" title="U+A300: YI SYLLABLE NZUP">???</td>
            <td class="glyph yi" title="U+A321: YI SYLLABLE SUP">???</td>
            <td class="glyph yi" title="U+A33F: YI SYLLABLE SSUP">???</td>
            <td class="glyph yi" title="U+A358: YI SYLLABLE ZHUP">???</td>
            <td class="glyph yi" title="U+A373: YI SYLLABLE CHUP">???</td>
            <td class="glyph yi" title="U+A38B: YI SYLLABLE RRUP">???</td>
            <td class="glyph yi" title="U+A3A2: YI SYLLABLE NRUP">???</td>
            <td class="glyph yi" title="U+A3BD: YI SYLLABLE SHUP">???</td>
            <td class="glyph yi" title="U+A3D7: YI SYLLABLE RUP">???</td>
            <td class="glyph yi" title="U+A3F3: YI SYLLABLE JUP">???</td>
            <td class="glyph yi" title="U+A40F: YI SYLLABLE QUP">???</td>
            <td class="glyph yi" title="U+A42A: YI SYLLABLE JJUP">???</td>
            <td class="glyph yi" title="U+A441: YI SYLLABLE NJUP">???</td>
            <td class="glyph yi" title="U+A45C: YI SYLLABLE NYUP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A484: YI SYLLABLE YUP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">urx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A030: YI SYLLABLE BURX">???</td>
            <td class="glyph yi" title="U+A04E: YI SYLLABLE PURX">???</td>
            <td class="glyph yi" title="U+A070: YI SYLLABLE BBURX">???</td>
            <td class="glyph yi" title="U+A089: YI SYLLABLE NBURX">???</td>
            <td class="glyph yi" title="U+A0A7: YI SYLLABLE HMURX">???</td>
            <td class="glyph yi" title="U+A0C7: YI SYLLABLE MURX">???</td>
            <td class="glyph yi" title="U+A0DC: YI SYLLABLE FURX">???</td>
            <td class="glyph yi" title="U+A0F8: YI SYLLABLE VURX">???</td>
            <td class="glyph yi" title="U+A118: YI SYLLABLE DURX">???</td>
            <td class="glyph yi" title="U+A134: YI SYLLABLE TURX">???</td>
            <td class="glyph yi" title="U+A14F: YI SYLLABLE DDURX">???</td>
            <td class="glyph yi" title="U+A166: YI SYLLABLE NDURX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A195: YI SYLLABLE NURX">???</td>
            <td class="glyph yi" title="U+A1AF: YI SYLLABLE HLURX">???</td>
            <td class="glyph yi" title="U+A1D2: YI SYLLABLE LURX">???</td>
            <td class="glyph yi" title="U+A1F6: YI SYLLABLE GURX">???</td>
            <td class="glyph yi" title="U+A212: YI SYLLABLE KURX">???</td>
            <td class="glyph yi" title="U+A22E: YI SYLLABLE GGURX">???</td>
            <td class="glyph yi" title="U+A244: YI SYLLABLE MGURX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A6: YI SYLLABLE ZURX">???</td>
            <td class="glyph yi" title="U+A2C8: YI SYLLABLE CURX">???</td>
            <td class="glyph yi" title="U+A2E5: YI SYLLABLE ZZURX">???</td>
            <td class="glyph yi" title="U+A301: YI SYLLABLE NZURX">???</td>
            <td class="glyph yi" title="U+A322: YI SYLLABLE SURX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A359: YI SYLLABLE ZHURX">???</td>
            <td class="glyph yi" title="U+A374: YI SYLLABLE CHURX">???</td>
            <td class="glyph yi" title="U+A38C: YI SYLLABLE RRURX">???</td>
            <td class="glyph yi" title="U+A3A3: YI SYLLABLE NRURX">???</td>
            <td class="glyph yi" title="U+A3BE: YI SYLLABLE SHURX">???</td>
            <td class="glyph yi" title="U+A3D8: YI SYLLABLE RURX">???</td>
            <td class="glyph yi" title="U+A3F4: YI SYLLABLE JURX">???</td>
            <td class="glyph yi" title="U+A410: YI SYLLABLE QURX">???</td>
            <td class="glyph yi" title="U+A42B: YI SYLLABLE JJURX">???</td>
            <td class="glyph yi" title="U+A442: YI SYLLABLE NJURX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A485: YI SYLLABLE YURX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">ur</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A031: YI SYLLABLE BUR">???</td>
            <td class="glyph yi" title="U+A04F: YI SYLLABLE PUR">???</td>
            <td class="glyph yi" title="U+A071: YI SYLLABLE BBUR">???</td>
            <td class="glyph yi" title="U+A08A: YI SYLLABLE NBUR">???</td>
            <td class="glyph yi" title="U+A0A8: YI SYLLABLE HMUR">???</td>
            <td class="glyph yi" title="U+A0C8: YI SYLLABLE MUR">???</td>
            <td class="glyph yi" title="U+A0DD: YI SYLLABLE FUR">???</td>
            <td class="glyph yi" title="U+A0F9: YI SYLLABLE VUR">???</td>
            <td class="glyph yi" title="U+A119: YI SYLLABLE DUR">???</td>
            <td class="glyph yi" title="U+A135: YI SYLLABLE TUR">???</td>
            <td class="glyph yi" title="U+A150: YI SYLLABLE DDUR">???</td>
            <td class="glyph yi" title="U+A167: YI SYLLABLE NDUR">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A196: YI SYLLABLE NUR">???</td>
            <td class="glyph yi" title="U+A1B0: YI SYLLABLE HLUR">???</td>
            <td class="glyph yi" title="U+A1D3: YI SYLLABLE LUR">???</td>
            <td class="glyph yi" title="U+A1F7: YI SYLLABLE GUR">???</td>
            <td class="glyph yi" title="U+A213: YI SYLLABLE KUR">???</td>
            <td class="glyph yi" title="U+A22F: YI SYLLABLE GGUR">???</td>
            <td class="glyph yi" title="U+A245: YI SYLLABLE MGUR">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A7: YI SYLLABLE ZUR">???</td>
            <td class="glyph yi" title="U+A2C9: YI SYLLABLE CUR">???</td>
            <td class="glyph yi" title="U+A2E6: YI SYLLABLE ZZUR">???</td>
            <td class="glyph yi" title="U+A302: YI SYLLABLE NZUR">???</td>
            <td class="glyph yi" title="U+A323: YI SYLLABLE SUR">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A35A: YI SYLLABLE ZHUR">???</td>
            <td class="glyph yi" title="U+A375: YI SYLLABLE CHUR">???</td>
            <td class="glyph yi" title="U+A38D: YI SYLLABLE RRUR">???</td>
            <td class="glyph yi" title="U+A3A4: YI SYLLABLE NRUR">???</td>
            <td class="glyph yi" title="U+A3BF: YI SYLLABLE SHUR">???</td>
            <td class="glyph yi" title="U+A3D9: YI SYLLABLE RUR">???</td>
            <td class="glyph yi" title="U+A3F5: YI SYLLABLE JUR">???</td>
            <td class="glyph yi" title="U+A411: YI SYLLABLE QUR">???</td>
            <td class="glyph yi" title="U+A42C: YI SYLLABLE JJUR">???</td>
            <td class="glyph yi" title="U+A443: YI SYLLABLE NJUR">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A486: YI SYLLABLE YUR">???</td>
        </tr>
        <tr>
            <th class="rowHeader">yt</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A032: YI SYLLABLE BYT">???</td>
            <td class="glyph yi" title="U+A050: YI SYLLABLE PYT">???</td>
            <td class="glyph yi" title="U+A072: YI SYLLABLE BBYT">???</td>
            <td class="glyph yi" title="U+A08B: YI SYLLABLE NBYT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0C9: YI SYLLABLE MYT">???</td>
            <td class="glyph yi" title="U+A0DE: YI SYLLABLE FYT">???</td>
            <td class="glyph yi" title="U+A0FA: YI SYLLABLE VYT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B1: YI SYLLABLE HLYT">???</td>
            <td class="glyph yi" title="U+A1D4: YI SYLLABLE LYT">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A8: YI SYLLABLE ZYT">???</td>
            <td class="glyph yi" title="U+A2CA: YI SYLLABLE CYT">???</td>
            <td class="glyph yi" title="U+A2E7: YI SYLLABLE ZZYT">???</td>
            <td class="glyph yi" title="U+A303: YI SYLLABLE NZYT">???</td>
            <td class="glyph yi" title="U+A324: YI SYLLABLE SYT">???</td>
            <td class="glyph yi" title="U+A340: YI SYLLABLE SSYT">???</td>
            <td class="glyph yi" title="U+A35B: YI SYLLABLE ZHYT">???</td>
            <td class="glyph yi" title="U+A376: YI SYLLABLE CHYT">???</td>
            <td class="glyph yi" title="U+A38E: YI SYLLABLE RRYT">???</td>
            <td class="glyph yi" title="U+A3A5: YI SYLLABLE NRYT">???</td>
            <td class="glyph yi" title="U+A3C0: YI SYLLABLE SHYT">???</td>
            <td class="glyph yi" title="U+A3DA: YI SYLLABLE RYT">???</td>
            <td class="glyph yi" title="U+A3F6: YI SYLLABLE JYT">???</td>
            <td class="glyph yi" title="U+A412: YI SYLLABLE QYT">???</td>
            <td class="glyph yi" title="U+A42D: YI SYLLABLE JJYT">???</td>
            <td class="glyph yi" title="U+A444: YI SYLLABLE NJYT">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46B: YI SYLLABLE XYT">???</td>
            <td class="glyph yi" title="U+A487: YI SYLLABLE YYT">???</td>
        </tr>
        <tr>
            <th class="rowHeader">yx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A033: YI SYLLABLE BYX">???</td>
            <td class="glyph yi" title="U+A051: YI SYLLABLE PYX">???</td>
            <td class="glyph yi" title="U+A073: YI SYLLABLE BBYX">???</td>
            <td class="glyph yi" title="U+A08C: YI SYLLABLE NBYX">???</td>
            <td class="glyph yi" title="U+A0A9: YI SYLLABLE HMYX">???</td>
            <td class="glyph yi" title="U+A0CA: YI SYLLABLE MYX">???</td>
            <td class="glyph yi" title="U+A0DF: YI SYLLABLE FYX">???</td>
            <td class="glyph yi" title="U+A0FB: YI SYLLABLE VYX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B2: YI SYLLABLE HLYX">???</td>
            <td class="glyph yi" title="U+A1D5: YI SYLLABLE LYX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2A9: YI SYLLABLE ZYX">???</td>
            <td class="glyph yi" title="U+A2CB: YI SYLLABLE CYX">???</td>
            <td class="glyph yi" title="U+A2E8: YI SYLLABLE ZZYX">???</td>
            <td class="glyph yi" title="U+A304: YI SYLLABLE NZYX">???</td>
            <td class="glyph yi" title="U+A325: YI SYLLABLE SYX">???</td>
            <td class="glyph yi" title="U+A341: YI SYLLABLE SSYX">???</td>
            <td class="glyph yi" title="U+A35C: YI SYLLABLE ZHYX">???</td>
            <td class="glyph yi" title="U+A377: YI SYLLABLE CHYX">???</td>
            <td class="glyph yi" title="U+A38F: YI SYLLABLE RRYX">???</td>
            <td class="glyph yi" title="U+A3A6: YI SYLLABLE NRYX">???</td>
            <td class="glyph yi" title="U+A3C1: YI SYLLABLE SHYX">???</td>
            <td class="glyph yi" title="U+A3DB: YI SYLLABLE RYX">???</td>
            <td class="glyph yi" title="U+A3F7: YI SYLLABLE JYX">???</td>
            <td class="glyph yi" title="U+A413: YI SYLLABLE QYX">???</td>
            <td class="glyph yi" title="U+A42E: YI SYLLABLE JJYX">???</td>
            <td class="glyph yi" title="U+A445: YI SYLLABLE NJYX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46C: YI SYLLABLE XYX">???</td>
            <td class="glyph yi" title="U+A488: YI SYLLABLE YYX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">y</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A034: YI SYLLABLE BY">???</td>
            <td class="glyph yi" title="U+A052: YI SYLLABLE PY">???</td>
            <td class="glyph yi" title="U+A074: YI SYLLABLE BBY">???</td>
            <td class="glyph yi" title="U+A08D: YI SYLLABLE NBY">???</td>
            <td class="glyph yi" title="U+A0AA: YI SYLLABLE HMY">???</td>
            <td class="glyph yi" title="U+A0CB: YI SYLLABLE MY">???</td>
            <td class="glyph yi" title="U+A0E0: YI SYLLABLE FY">???</td>
            <td class="glyph yi" title="U+A0FC: YI SYLLABLE VY">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B3: YI SYLLABLE HLY">???</td>
            <td class="glyph yi" title="U+A1D6: YI SYLLABLE LY">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AA: YI SYLLABLE ZY">???</td>
            <td class="glyph yi" title="U+A2CC: YI SYLLABLE CY">???</td>
            <td class="glyph yi" title="U+A2E9: YI SYLLABLE ZZY">???</td>
            <td class="glyph yi" title="U+A305: YI SYLLABLE NZY">???</td>
            <td class="glyph yi" title="U+A326: YI SYLLABLE SY">???</td>
            <td class="glyph yi" title="U+A342: YI SYLLABLE SSY">???</td>
            <td class="glyph yi" title="U+A35D: YI SYLLABLE ZHY">???</td>
            <td class="glyph yi" title="U+A378: YI SYLLABLE CHY">???</td>
            <td class="glyph yi" title="U+A390: YI SYLLABLE RRY">???</td>
            <td class="glyph yi" title="U+A3A7: YI SYLLABLE NRY">???</td>
            <td class="glyph yi" title="U+A3C2: YI SYLLABLE SHY">???</td>
            <td class="glyph yi" title="U+A3DC: YI SYLLABLE RY">???</td>
            <td class="glyph yi" title="U+A3F8: YI SYLLABLE JY">???</td>
            <td class="glyph yi" title="U+A414: YI SYLLABLE QY">???</td>
            <td class="glyph yi" title="U+A42F: YI SYLLABLE JJY">???</td>
            <td class="glyph yi" title="U+A446: YI SYLLABLE NJY">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46D: YI SYLLABLE XY">???</td>
            <td class="glyph yi" title="U+A489: YI SYLLABLE YY">???</td>
        </tr>
        <tr>
            <th class="rowHeader">yp</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A035: YI SYLLABLE BYP">???</td>
            <td class="glyph yi" title="U+A053: YI SYLLABLE PYP">???</td>
            <td class="glyph yi" title="U+A075: YI SYLLABLE BBYP">???</td>
            <td class="glyph yi" title="U+A08E: YI SYLLABLE NBYP">???</td>
            <td class="glyph yi" title="U+A0AB: YI SYLLABLE HMYP">???</td>
            <td class="glyph yi" title="U+A0CC: YI SYLLABLE MYP">???</td>
            <td class="glyph yi" title="U+A0E1: YI SYLLABLE FYP">???</td>
            <td class="glyph yi" title="U+A0FD: YI SYLLABLE VYP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B4: YI SYLLABLE HLYP">???</td>
            <td class="glyph yi" title="U+A1D7: YI SYLLABLE LYP">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AB: YI SYLLABLE ZYP">???</td>
            <td class="glyph yi" title="U+A2CD: YI SYLLABLE CYP">???</td>
            <td class="glyph yi" title="U+A2EA: YI SYLLABLE ZZYP">???</td>
            <td class="glyph yi" title="U+A306: YI SYLLABLE NZYP">???</td>
            <td class="glyph yi" title="U+A327: YI SYLLABLE SYP">???</td>
            <td class="glyph yi" title="U+A343: YI SYLLABLE SSYP">???</td>
            <td class="glyph yi" title="U+A35E: YI SYLLABLE ZHYP">???</td>
            <td class="glyph yi" title="U+A379: YI SYLLABLE CHYP">???</td>
            <td class="glyph yi" title="U+A391: YI SYLLABLE RRYP">???</td>
            <td class="glyph yi" title="U+A3A8: YI SYLLABLE NRYP">???</td>
            <td class="glyph yi" title="U+A3C3: YI SYLLABLE SHYP">???</td>
            <td class="glyph yi" title="U+A3DD: YI SYLLABLE RYP">???</td>
            <td class="glyph yi" title="U+A3F9: YI SYLLABLE JYP">???</td>
            <td class="glyph yi" title="U+A415: YI SYLLABLE QYP">???</td>
            <td class="glyph yi" title="U+A430: YI SYLLABLE JJYP">???</td>
            <td class="glyph yi" title="U+A447: YI SYLLABLE NJYP">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46E: YI SYLLABLE XYP">???</td>
            <td class="glyph yi" title="U+A48A: YI SYLLABLE YYP">???</td>
        </tr>
        <tr>
            <th class="rowHeader">yrx</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A036: YI SYLLABLE BYRX">???</td>
            <td class="glyph yi" title="U+A054: YI SYLLABLE PYRX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A08F: YI SYLLABLE NBYRX">???</td>
            <td class="glyph yi" title="U+A0AC: YI SYLLABLE HMYRX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0FE: YI SYLLABLE VYRX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B5: YI SYLLABLE HLYRX">???</td>
            <td class="glyph yi" title="U+A1D8: YI SYLLABLE LYRX">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AC: YI SYLLABLE ZYRX">???</td>
            <td class="glyph yi" title="U+A2CE: YI SYLLABLE CYRX">???</td>
            <td class="glyph yi" title="U+A2EB: YI SYLLABLE ZZYRX">???</td>
            <td class="glyph yi" title="U+A307: YI SYLLABLE NZYRX">???</td>
            <td class="glyph yi" title="U+A328: YI SYLLABLE SYRX">???</td>
            <td class="glyph yi" title="U+A344: YI SYLLABLE SSYRX">???</td>
            <td class="glyph yi" title="U+A35F: YI SYLLABLE ZHYRX">???</td>
            <td class="glyph yi" title="U+A37A: YI SYLLABLE CHYRX">???</td>
            <td class="glyph yi" title="U+A392: YI SYLLABLE RRYRX">???</td>
            <td class="glyph yi" title="U+A3A9: YI SYLLABLE NRYRX">???</td>
            <td class="glyph yi" title="U+A3C4: YI SYLLABLE SHYRX">???</td>
            <td class="glyph yi" title="U+A3DE: YI SYLLABLE RYRX">???</td>
            <td class="glyph yi" title="U+A3FA: YI SYLLABLE JYRX">???</td>
            <td class="glyph yi" title="U+A416: YI SYLLABLE QYRX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A448: YI SYLLABLE NJYRX">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A46F: YI SYLLABLE XYRX">???</td>
            <td class="glyph yi" title="U+A48B: YI SYLLABLE YYRX">???</td>
        </tr>
        <tr>
            <th class="rowHeader">yr</th>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A037: YI SYLLABLE BYR">???</td>
            <td class="glyph yi" title="U+A055: YI SYLLABLE PYR">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A090: YI SYLLABLE NBYR">???</td>
            <td class="glyph yi" title="U+A0AD: YI SYLLABLE HMYR">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A0FF: YI SYLLABLE VYR">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A1B6: YI SYLLABLE HLYR">???</td>
            <td class="glyph yi" title="U+A1D9: YI SYLLABLE LYR">???</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A2AD: YI SYLLABLE ZYR">???</td>
            <td class="glyph yi" title="U+A2CF: YI SYLLABLE CYR">???</td>
            <td class="glyph yi" title="U+A2EC: YI SYLLABLE ZZYR">???</td>
            <td class="glyph yi" title="U+A308: YI SYLLABLE NZYR">???</td>
            <td class="glyph yi" title="U+A329: YI SYLLABLE SYR">???</td>
            <td class="glyph yi" title="U+A345: YI SYLLABLE SSYR">???</td>
            <td class="glyph yi" title="U+A360: YI SYLLABLE ZHYR">???</td>
            <td class="glyph yi" title="U+A37B: YI SYLLABLE CHYR">???</td>
            <td class="glyph yi" title="U+A393: YI SYLLABLE RRYR">???</td>
            <td class="glyph yi" title="U+A3AA: YI SYLLABLE NRYR">???</td>
            <td class="glyph yi" title="U+A3C5: YI SYLLABLE SHYR">???</td>
            <td class="glyph yi" title="U+A3DF: YI SYLLABLE RYR">???</td>
            <td class="glyph yi" title="U+A3FB: YI SYLLABLE JYR">???</td>
            <td class="glyph yi" title="U+A417: YI SYLLABLE QYR">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A449: YI SYLLABLE NJYR">???</td>
            <td>&nbsp;</td>
            <td class="glyph yi" title="U+A470: YI SYLLABLE XYR">???</td>
            <td class="glyph yi" title="U+A48C: YI SYLLABLE YYR">???</td>
        </tr>
    </tbody>
</table>

<p>Press <kbd>w</kbd> then <kbd>space</kbd> to type <span class="glyph yi">???</span>, the syllable iteration mark (used to reduplicate a preceding syllable).</p>
<h2>Typing punctuation</h2>

<table class="inputSequences" >
  <thead>
    <tr>
      <th>Keys</th>
      <th>Character</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>!</td>
      <td class="glyph yi">&#xff01;</td>
      <td>Fullwidth exclamation mark</td>
    </tr>
    <tr>
      <td>?</td>
      <td class="glyph yi">&#xff1f;</td>
      <td>Fullwidth question mark</td>
    </tr>
    <tr>
      <td>(</td>
      <td class="glyph yi">&#xff08;</td>
      <td>Fullwidth left parenthesis</td>
    </tr>
    <tr>
      <td>)</td>
      <td class="glyph yi">&#xff09;</td>
      <td>Fullwidth right parenthesis</td>
    </tr>
    <tr>
      <td>[</td>
      <td class="glyph yi">&#xff3b;</td>
      <td>Fullwidth left square bracket</td>
    </tr>
    <tr>
      <td>]</td>
      <td class="glyph yi">&#xff3d;</td>
      <td>Fullwidth right square bracket</td>
    </tr>
    <tr>
      <td>|</td>
      <td class="glyph yi">&#xff5c;</td>
      <td>Fullwidth vertical line</td>
    </tr>
    <tr>
      <td>{</td>
      <td class="glyph yi">&#xff5b;</td>
      <td>Fullwidth left curly bracket</td>
    </tr>
    <tr>
      <td>}</td>
      <td class="glyph yi">&#xff5d;</td>
      <td>Fullwidth right curly bracket</td>
    </tr>
    <tr>
      <td>:</td>
      <td class="glyph yi">&#xff1a;</td>
      <td>Fullwidth colon</td>
    </tr>
    <tr>
      <td>;</td>
      <td class="glyph yi">&#xff1b;</td>
      <td>Fullwidth semicolon</td>
    </tr>
    <tr>
      <td>/</td>
      <td class="glyph yi">&#xff0f;</td>
      <td>Fullwidth solidus</td>
    </tr>
    <tr>
      <td><kbd>space</kbd></td>
      <td class="glyph yi">&#x3000;</td>
      <td>Ideographic space</td>
    </tr>
    <tr>
      <td>.</td>
      <td class="glyph yi">&#x3002;</td>
      <td>Ideographic full stop (juhao)</td>
    </tr>
    <tr>
      <td>\</td>
      <td class="glyph yi">&#x3001;</td>
      <td>Ideographic comma (dunhao)</td>
    </tr>
    <tr>
      <td>,</td>
      <td class="glyph yi">&#xff0c;</td>
      <td>Fullwidth comma</td>
    </tr>
    <tr>
      <td>&lt;</td>
      <td class="glyph yi">&#x3008;</td>
      <td>Left angle bracket</td>
    </tr>
    <tr>
      <td>&gt;</td>
      <td class="glyph yi">&#x3009;</td>
      <td>Right angle bracket</td>
    </tr>
    <tr>
      <td>&lt;&lt;</td>
      <td class="glyph yi">&#x300a;</td>
      <td>Left double angle bracket</td>
    </tr>
    <tr>
      <td>&gt;&gt;</td>
      <td class="glyph yi">&#x300b;</td>
      <td>Right double angle bracket</td>
    </tr>
    <tr>
      <td>`</td>
      <td class="glyph yi">&#x2018;</td>
      <td>Left single quotation mark</td>
    </tr>
    <tr>
      <td>'</td>
      <td class="glyph yi">&#x2019;</td>
      <td>Right single quotation mark</td>
    </tr>
    <tr>
        <td>``</td>
      <td class="glyph yi">&#x201c;</td>
      <td>Left double quotation mark</td>
    </tr>
    <tr>
      <td>''</td>
      <td class="glyph yi">&#x201d;</td>
      <td>Right double quotation mark</td>
    </tr>
    <tr>
      <td>..</td>
      <td class="glyph yi">&#x2026;</td>
      <td>Horizontal ellipsis</td>
    </tr>
  </tbody>
</table>
