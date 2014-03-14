もし(/^トップページにアクセス$/) do
	visit '/main'
end

ならば(/^トップページ情報を表示する$/) do
	page.should have_content("見回り集計システム")
end
