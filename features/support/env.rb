require 'capybara'
require 'capybara/cucumber'
require 'capybara/mechanize'
require 'rspec'

Capybara.default_driver = :mechanize

Before do
	Capybara.current_session.driver.browser.agent.open_timeout = 1
	Capybara.current_session.driver.browser.agent.read_timeout = 1
end
