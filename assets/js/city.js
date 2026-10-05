(function () {
  const $ = id => document.getElementById(id);
  const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target) } }), { threshold: .08 });
  document.querySelectorAll('.rv').forEach(el => io.observe(el));
  const tbtns = [...document.querySelectorAll('.tab-btn')], tpanels = [...document.querySelectorAll('.tab-panel')];
  tbtns.forEach((b, i) => b.addEventListener('click', () => { tbtns.forEach(x => x.classList.remove('active')); tpanels.forEach(x => x.classList.remove('active')); b.classList.add('active'); tpanels[i].classList.add('active'); if (innerWidth <= 860) b.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' }) }));
  $('aiSide').addEventListener('click', () => tbtns[0].click());
  const steps = [...document.querySelectorAll('.pstep')], sn = $('stepNow'), sb = $('stepBar');
  const so = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { const i = steps.indexOf(e.target); steps.forEach((s, j) => s.classList.toggle('on', j <= i)); sn.textContent = String(i + 1).padStart(2, '0'); sb.style.width = ((i + 1) / steps.length * 100) + '%' } }), { rootMargin: '-45% 0px -45% 0px' });
  steps.forEach(s => so.observe(s));
  const abtns = [...document.querySelectorAll('#areaList button')], pins = [...document.querySelectorAll('.mp')], an = $('areaName');
  function area(a) { abtns.forEach(b => b.classList.toggle('active', b.dataset.a === a)); pins.forEach(p => p.classList.toggle('active', p.dataset.a === a)); const b = abtns.find(x => x.dataset.a === a); if (b) an.textContent = b.firstChild.textContent.trim() }
  abtns.forEach(b => { b.addEventListener('mouseenter', () => area(b.dataset.a)); b.addEventListener('click', () => area(b.dataset.a)) });
  pins.forEach(p => p.addEventListener('click', () => area(p.dataset.a)));
  if (abtns.length) area(abtns[0].dataset.a);


  // search preview: typing queries
  (function () {
    const typed = document.getElementById('typed'); if (!typed) return;
    const queries = [typed.textContent.trim(), ...JSON.parse(typed.dataset.nextQueries || '[]')];
    if (!queries.length) return;
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) { typed.textContent = queries[0]; return }
    let qi = 0, ci = 0, del = false;
    (function type() {
      const q = queries[qi]; typed.textContent = q.slice(0, ci);
      if (!del && ci < q.length) { ci++; setTimeout(type, 70) }
      else if (!del) { del = true; setTimeout(type, 1800) }
      else if (ci > 0) { ci--; setTimeout(type, 30) }
      else { del = false; qi = (qi + 1) % queries.length; setTimeout(type, 300) }
    })();
  })();
  $('form').addEventListener('submit', e => {
    e.preventDefault();
    const f = e.target, st = $('status');
    let ok = true;
    f.querySelectorAll('[required]').forEach(i => { const v = i.value.trim() !== '' && i.checkValidity(); i.classList.toggle('invalid', !v); if (!v) ok = false });
    if (!ok) { st.style.color = '#e5484d'; st.textContent = 'Please add your name, a valid phone number and your website.'; f.querySelector('.invalid').focus(); return }
    const d = Object.fromEntries(new FormData(f));
    const lines = ['Hi Tachomind, I would like a free SEO audit.', '', '*Name:* ' + d.name.trim(), '*Phone:* ' + d.phone.trim(), '*Website:* ' + d.website.trim(), '*Service:* ' + d.service, '*Location:* ' + d.area];
    if (d.message && d.message.trim()) lines.push('*Details:* ' + d.message.trim());
    lines.push('', 'Please share the audit and next steps.');
    const url = 'https://wa.me/' + (f.dataset.wa || '91700824XXXX') + '?text=' + encodeURIComponent(lines.join('\n'));
    const w = window.open(url, '_blank');
    if (w) { try { w.opener = null } catch (_) { } } else { location.href = url }
    st.style.color = '#1a8f4a'; st.textContent = 'WhatsApp is opening with your request. Just tap Send.';
    f.reset();
  });
  document.querySelectorAll('#form input,#form select').forEach(i => i.addEventListener('input', () => i.classList.remove('invalid')));
  const track = $('track'); const stp = () => track.querySelector('.ind').offsetWidth + 20;
  $('next').onclick = () => track.scrollBy({ left: stp(), behavior: 'smooth' });
  $('prev').onclick = () => track.scrollBy({ left: -stp(), behavior: 'smooth' });
  const pt = $('phaseTrack'); new IntersectionObserver(es => { if (es[0].isIntersecting) pt.classList.add('go') }, { threshold: .4 }).observe(pt);
  document.querySelectorAll('[data-acc]').forEach(g => {
    const items = [...g.querySelectorAll('.qa')];
    const h = (it, o) => { const b = it.querySelector('.qa-b'); b.style.maxHeight = o ? b.scrollHeight + 'px' : '0px' };
    items.forEach(it => {
      if (it.classList.contains('open')) h(it, true);
      it.querySelector('.qa-h').addEventListener('click', () => { const w = it.classList.contains('open'); items.forEach(o => { o.classList.remove('open'); h(o, false) }); if (!w) { it.classList.add('open'); h(it, true) } })
    })
  });
  addEventListener('resize', () => document.querySelectorAll('.qa.open .qa-b').forEach(b => b.style.maxHeight = b.scrollHeight + 'px'));
})();
