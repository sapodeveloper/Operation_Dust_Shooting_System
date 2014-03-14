require 'capybara'
require 'capybara/cucumber'
require 'capybara/mechanize'
require 'rspec'

Capybara.configure do |config|
  config.app = "Operation Dust Shooting System"
  config.default_driver = :mechanize
  config.app_host       = 'localhost'
end

Before do
	Capybara.current_session.driver.browser.agent.open_timeout = 1
	Capybara.current_session.driver.browser.agent.read_timeout = 1
end
